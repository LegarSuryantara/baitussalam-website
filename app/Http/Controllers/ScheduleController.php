<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ScheduleController extends Controller
{
    // HALAMAN KALENDER
    public function calendarPage()
    {
        return view('penjadwalan_masjid.penjadwalanPage');  
    }
    public function kegiatanPage()
    {
        $today = now()->toDateString();

        $kegiatans = Schedule::orderByRaw("
                CASE 
                    WHEN end_date >= ? THEN 0
                    ELSE 1
                END
            ", [$today])
            ->orderBy('date', 'asc')
            ->get();

        return view('kegiatan_masjid.kegiatanPage', compact('kegiatans'));
    }


    // EVENTS UNTUK FULLCALENDAR
    public function getEvents()
    {
        return Schedule::all()->map(function ($s) {

            $startDate = Carbon::parse($s->date);
            $endDate = $s->end_date
                ? Carbon::parse($s->end_date)->addDay()
                : $startDate->copy()->addDay();

            return [
                'id' => $s->id,
                'title' => $s->title,
                'start' => $startDate->toDateString(),
                'end'   => $endDate->toDateString(),
                'extendedProps' => [
                    'status' => $s->status,
                ]
            ];
        });
    }

    // AGENDA PER TANGGAL (KANAN)
    public function agendaByDate(Request $request)
    {
        return Schedule::where('date', '<=', $request->date)
            ->where(function ($q) use ($request) {
                $q->whereNull('end_date')
                    ->orWhere('end_date', '>=', $request->date);
            })
            ->orderBy('start')
            ->get()
            ->map(function ($s) {
                return [
                    'id' => $s->id,
                    'title' => $s->title,
                    'category' => $s->category,
                    'location' => $s->location,
                    'start_time' => $s->start_time,
                    'end_time'   => $s->end_time,
                    'status'     => $s->status,
                ];
            });
    }



    // FORM TAMBAH / EDIT
    public function form(Request $request, $id = null)
    {
        $schedule = $id ? Schedule::findOrFail($id) : new Schedule();

        // AUTO ISI DATE DARI KALENDER
        if (!$id && $request->has('date')) {
            $schedule->date = $request->date;
        }

        return view('penjadwalan_masjid.edit', compact('schedule'));
    }

    // SIMPAN (CREATE & UPDATE)
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|max:25',
            'category'   => 'required',
            'date'       => 'required|date',
            'end_date'   => 'nullable|date|after_or_equal:date',
            'start_time' => 'required',
            'end_time'   => 'required',
            'location'   => 'nullable|max:150',
            'description' => 'nullable|max:255',
        ]);

        if (Carbon::parse($request->date . ' ' . $request->end_time)
            ->lte(Carbon::parse($request->date . ' ' . $request->start_time))
        ) {
            return back()
                ->withErrors(['end_time' => 'Waktu selesai harus setelah waktu mulai'])
                ->withInput();
        }

        $startDate = Carbon::parse($request->date);
        $endDate   = $request->end_date
            ? Carbon::parse($request->end_date)
            : Carbon::parse($request->date);

        $start = Carbon::parse($startDate->toDateString() . ' ' . $request->start_time);
        $end   = Carbon::parse($endDate->toDateString() . ' ' . $request->end_time);

        Schedule::create([
            'title'    => $request->title,
            'category' => $request->category,
            'date'     => $startDate->toDateString(),
            'end_date' => $endDate->toDateString(),
            'start'    => $start,
            'end'      => $end,
            'location' => $request->location ?? 'Masjid Baitussalam',
            'description' => $request->description,
        ]);

        return redirect()->route('penjadwalan')
            ->with('success', 'Agenda berhasil ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $request->validate([
            'title'      => 'required|max:25',
            'category'   => 'required',
            'date'       => 'required|date',
            'end_date'   => 'nullable|date|after_or_equal:date',
            'start_time' => 'required',
            'end_time'   => 'required',
            'location'   => 'nullable|max:150',
            'description' => 'nullable|max:255',
        ]);
        
        if (Carbon::parse($request->date . ' ' . $request->end_time)
            ->lte(Carbon::parse($request->date . ' ' . $request->start_time))
        ) {

            return back()
                ->withErrors(['end_time' => 'Waktu selesai harus setelah waktu mulai'])
                ->withInput();
        }

        $startDate = Carbon::parse($request->date);
        $endDate   = $request->end_date
            ? Carbon::parse($request->end_date)
            : Carbon::parse($request->date);

        $start = Carbon::parse($startDate->toDateString() . ' ' . $request->start_time);
        $end   = Carbon::parse($endDate->toDateString() . ' ' . $request->end_time);

        $schedule->update([
            'title'    => $request->title,
            'category' => $request->category,
            'date'     => $startDate->toDateString(),
            'end_date' => $endDate->toDateString(),
            'start'    => $start,
            'end'      => $end,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return redirect()->route('penjadwalan')
            ->with('success', 'Agenda berhasil diupdate');
    }

    // HAPUS
    public function destroy($id)
    {
        Schedule::findOrFail($id)->delete();

        return response()->json(['message' => 'Agenda dihapus']);
    }

    // DETAIL (sementara pakai form yang sama)
    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('kegiatan_masjid.lihatPage', compact('schedule'));
    }
}




