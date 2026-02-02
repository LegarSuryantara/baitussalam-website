<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // HALAMAN KALENDER
    public function calendarPage()
    {
        return view('penjadwalan_masjid.penjadwalanPage');
    }

    // EVENTS UNTUK FULLCALENDAR
    public function getEvents()
    {
        return Schedule::select(['id', 'title', 'start', 'end'])->get();
    }

    // AGENDA PER TANGGAL (KANAN)
    public function agendaByDate(Request $request)
    {
        return Schedule::where('date', $request->date)
            ->orderBy('start')
            ->get()
            ->map(function ($s) {
                return [
                    'id' => $s->id,
                    'title' => $s->title,
                    'category' => $s->category,
                    'location' => $s->location,
                    'start_time' => \Carbon\Carbon::parse($s->start)->format('H:i'),
                    'end_time'   => \Carbon\Carbon::parse($s->end)->format('H:i'),
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
            'date'       => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time'   => 'required',
            'status'     => 'required',
            'location'   => 'nullable|max:150',
            'description' => 'nullable|max:255',
        ]);

        $start = $request->date . ' ' . $request->start_time;
        $end   = $request->date . ' ' . $request->end_time;

        Schedule::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'start'       => $start,   
            'end'         => $end,
            'date'        => $request->date,
            'status'      => $request->status,
            'location'    => $request->location ?? 'Masjid Baitussalam',
            'description' => $request->description,
        ]);

        return redirect()->route('penjadwalan')->with('success', 'Agenda berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $start = $request->date . ' ' . $request->start_time;
        $end   = $request->date . ' ' . $request->end_time;

        $schedule->update([
            'title'    => $request->title,
            'category' => $request->category,
            'start'    => $start,  
            'end'      => $end,    
            'date'     => $request->date,
            'status'   => $request->status,
            'location' => $request->location,
        ]);

        return redirect()->route('penjadwalan')->with('success', 'Agenda berhasil diupdate');
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

        return view('penjadwalan_masjid.edit', compact('schedule'));
    }
}
