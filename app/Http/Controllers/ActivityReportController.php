<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityReport;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\DocumentConverter;

class ActivityReportController extends Controller
{
    public function index(Request $request)
    {
        $year   = $request->tahun;
        $search = $request->search;
        $query = ActivityReport::query();
        if ($year) {
            $query->where('periode_tahun', $year);
        }
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }
        $laporans = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();
        return view(
            'dokumen_masjid.laporan_kegiatan.laporankegiatanPage',
            compact('laporans', 'year', 'search')
        );
    }


    public function store(Request $request)
    {
        $validated = $this->validateData($request);

        $file = $request->file('file');
        $originalExtension = strtolower($file->getClientOriginalExtension());
        $filename = now()->format('Y-m-d') . '-' . Str::random(5) . '.' . $originalExtension;

        // Store original first
        $file->storeAs('laporan_kegiatan', $filename, 'public');

        $isConverted = false;
        if ($originalExtension !== 'pdf') {
            $sourcePath = storage_path('app/public/laporan_kegiatan/' . $filename);
            $outputDir = storage_path('app/public/laporan_kegiatan');
            
            $pdfPath = DocumentConverter::convertToPdf($sourcePath, $outputDir);

            if ($pdfPath) {
                // Delete original file
                if (file_exists($sourcePath)) unlink($sourcePath);
                // Update filename to the new PDF name
                $filename = pathinfo($pdfPath, PATHINFO_BASENAME);
                $isConverted = true;
            }
        }

        ActivityReport::create([
            'title' => strip_tags($validated['title']),
            'description' => strip_tags($validated['description'] ?? ''),
            'periode_bulan' => $validated['periode_bulan'],
            'periode_tahun' => $validated['periode_tahun'],
            'file' => $filename,
            'uploaded_by' => Auth::user()->name ?? 'Takmir',
        ]);

        $message = $isConverted 
            ? 'Laporan berhasil diupload dan dikonversi ke PDF' 
            : 'Laporan berhasil diupload (Format Asli)';

        return redirect()
            ->route('laporankegiatan')
            ->with('success', $message);
    }


    public function update(Request $request, $id)
    {
        $report = ActivityReport::findOrFail($id);
        $validated = $this->validateData($request, true);
        if ($request->hasFile('file')) {
            Storage::disk('public')->delete('laporan_kegiatan/' . $report->file);
            $file = $request->file('file');
            $originalExtension = strtolower($file->getClientOriginalExtension());
            $filename = now()->format('Y-m-d') . '-' . Str::random(5) . '.' . $originalExtension;
            
            $file->storeAs('laporan_kegiatan', $filename, 'public');

            $isConverted = false;
            if ($originalExtension !== 'pdf') {
                $sourcePath = storage_path('app/public/laporan_kegiatan/' . $filename);
                $outputDir = storage_path('app/public/laporan_kegiatan');
                
                $pdfPath = DocumentConverter::convertToPdf($sourcePath, $outputDir);

                if ($pdfPath) {
                    if (file_exists($sourcePath)) unlink($sourcePath);
                    $filename = pathinfo($pdfPath, PATHINFO_BASENAME);
                    $isConverted = true;
                }
            }
            
            $report->file = $filename;
            $message = $isConverted 
                ? 'Laporan diupdate dan dikonversi ke PDF' 
                : 'Laporan diupdate (Format Asli)';
        } else {
            $message = 'Laporan berhasil diupdate';
        }
        $report->update($validated);
        return back()->with('success', $message);
    }

    public function show($id)
    {
        $laporan = ActivityReport::findOrFail($id);
        $path = 'laporan_kegiatan/' . $laporan->file;
        $fullPath = storage_path('app/public/' . $path);
        $size = file_exists($fullPath)
            ? round(filesize($fullPath) / 1024 / 1024, 2) . ' MB'
            : '-';
        $ext = strtolower(pathinfo($laporan->file, PATHINFO_EXTENSION));
        return view(
            'dokumen_masjid.laporan_kegiatan.lihatPage',
            compact('laporan', 'size', 'ext')
        );
    }

    public function destroy($id)
    {
        $report = ActivityReport::findOrFail($id);
        if ($report->file && Storage::disk('public')->exists('laporan_kegiatan/' . $report->file)) {
            Storage::disk('public')->delete('laporan_kegiatan/' . $report->file);
        }
        $report->delete();
        return back()->with('success', 'Laporan dihapus');
    }

    private function validateData(Request $request, $isUpdate = false)
    {
        $fileRule = $isUpdate
            ? 'nullable|file|mimes:pdf,xlsx,xls,doc,docx|max:10240'
            : 'required|file|mimes:pdf,xlsx,xls,doc,docx|max:10240';
        return $request->validate(
            [
                'title' => 'required|max:150',
                'periode_bulan' => 'required|integer|min:1|max:12',
                'periode_tahun' => 'required|integer|min:2020|max:2100',
                'description' => 'nullable|max:500',
                'file' => $fileRule,
            ],
            [
                'title.required' => 'Judul laporan wajib diisi',
                'periode_bulan.required' => 'Pilih bulan laporan',
                'periode_tahun.required' => 'Pilih tahun laporan',
                'file.required' => 'File wajib diupload',
                'file.mimes' => 'Format file harus PDF, Excel, atau Word. Sistem akan otomatis mengubahnya menjadi PDF.',
                'file.max' => 'Ukuran maksimal 10MB',
            ]
        );
    }
}
