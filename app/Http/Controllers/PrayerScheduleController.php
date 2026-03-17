<?php

namespace App\Http\Controllers;

use App\Models\PrayerSchedule;
use Illuminate\Http\Request;

class PrayerScheduleController extends Controller
{
    public function index()
    {
        $schedules = PrayerSchedule::orderBy('date', 'asc')->get();
        return response()->json($schedules);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:jumat,idul_fitri,idul_adha',
            'date' => 'required|date',
            'bilal' => 'nullable|string|max:100',
            'khotib' => 'nullable|string|max:100',
            'imam' => 'nullable|string|max:100',
        ]);

        PrayerSchedule::create($data);

        return redirect()->back()->with('success', 'Jadwal ibadah berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $schedule = PrayerSchedule::findOrFail($id);

        $data = $request->validate([
            'type' => 'required|in:jumat,idul_fitri,idul_adha',
            'date' => 'required|date',
            'bilal' => 'nullable|string|max:100',
            'khotib' => 'nullable|string|max:100',
            'imam' => 'nullable|string|max:100',
        ]);

        $schedule->update($data);

        return redirect()->back()->with('success', 'Jadwal ibadah berhasil diupdate');
    }

    public function destroy($id)
    {
        $schedule = PrayerSchedule::findOrFail($id);
        $schedule->delete();

        return redirect()->back()->with('success', 'Jadwal ibadah berhasil dihapus');
    }
}
