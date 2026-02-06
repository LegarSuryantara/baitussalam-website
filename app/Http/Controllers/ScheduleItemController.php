<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\ScheduleItem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ScheduleItemController extends Controller
{
    /* =========================================================
     * STORE (TAMBAH RANGKAIAN)
     * ========================================================= */
    public function store(Request $request, $scheduleId)
    {
        $schedule = Schedule::findOrFail($scheduleId);

        $data = $this->validateData($request);

        $this->validateTimeRange($schedule, $data['time']);

        ScheduleItem::create([
            'schedule_id' => $schedule->id,
            'time' => $data['time'],
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
        ]);

        return back()->with('success', 'Rangkaian acara ditambahkan');
    }

    /* =========================================================
     * DELETE
     * ========================================================= */
    public function destroy($id)
    {
        $item = ScheduleItem::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Rangkaian acara dihapus');
    }

    /* =========================================================
     * HELPERS (KHUSUS ITEM)
     * ========================================================= */

    private function validateData(Request $request)
    {
        return $request->validate([
            'time' => 'required|date_format:H:i|unique:schedule_items,time',
            'title' => 'required|max:100|unique:schedule_items,title',
            'description' => 'nullable|max:255',
        ]);
    }

    private function validateTimeRange(Schedule $schedule, string $time)
    {
        $itemTime = Carbon::createFromFormat('H:i', $time);

        $start = Carbon::parse($schedule->start)->format('H:i');
        $end   = Carbon::parse($schedule->end)->format('H:i');

        if ($time < $start || $time > $end) {
            abort(422, 'Jam harus di antara ' . $start . ' - ' . $end);
        }
    }
}
