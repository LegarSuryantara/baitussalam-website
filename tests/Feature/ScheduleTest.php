<?php

namespace Tests\Feature;

use App\Models\Schedule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScheduleTest extends TestCase
{
    use RefreshDatabase;

    public function test_halaman_kalender_dapat_diakses()
    {
        $response = $this->get(route('penjadwalan'));

        $response->assertStatus(200);
        $response->assertViewIs('penjadwalan_masjid.penjadwalanPage');
    }

    public function test_bisa_mengambil_data_events_untuk_fullcalendar()
    {
        Schedule::create([
            'title' => 'Kajian Subuh',
            'category' => 'Kajian',
            'start' => now(),
            'end' => now()->addHour(),
            'date' => now()->format('Y-m-d'),
            'status' => 'Akan Datang',
            'location' => 'Masjid',
            'description' => 'Test'
        ]);

        $response = $this->get('/penjadwalan/events');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'title', 'start', 'end']
        ]);
    }

    public function test_bisa_mengambil_agenda_berdasarkan_tanggal()
    {
        $targetDate = now()->addDay()->format('Y-m-d');

        Schedule::create([
            'title' => 'Agenda Target',
            'category' => 'Rapat',
            'start' => $targetDate . ' 08:00:00',
            'end' => $targetDate . ' 10:00:00',
            'date' => $targetDate,
            'status' => 'Akan Datang'
        ]);

        Schedule::create([
            'title' => 'Agenda Lain',
            'category' => 'Rapat',
            'start' => now()->addDays(5),
            'end' => now()->addDays(5)->addHour(),
            'date' => now()->addDays(5)->format('Y-m-d'),
            'status' => 'Akan Datang'
        ]);

        $response = $this->get('/penjadwalan/agenda?date=' . $targetDate);

        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonFragment(['title' => 'Agenda Target']);
        $response->assertJsonMissing(['title' => 'Agenda Lain']);
    }

    public function test_form_tambah_data_dapat_diakses()
    {
        $response = $this->get(route('penjadwalan.create'));

        $response->assertStatus(200);
        $response->assertViewIs('penjadwalan_masjid.edit');
    }

    public function test_user_bisa_menyimpan_jadwal_baru()
    {
        $today = now()->format('Y-m-d');

        $data = [
            'title' => 'Sholat Jumat',
            'category' => 'Ibadah',
            'date' => $today,
            'start_time' => '11:30',
            'end_time' => '12:30',
            'status' => 'Akan Datang',
            'location' => 'Lantai 1',
            'description' => 'Khutbah Jumat',
        ];

        $response = $this->post(route('penjadwalan.store'), $data);

        $response->assertRedirect(route('penjadwalan'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('schedules', [
            'title' => 'Sholat Jumat',
            'location' => 'Lantai 1'
        ]);
    }

    public function test_validasi_gagal_jika_input_tidak_lengkap()
    {
        $response = $this->post(route('penjadwalan.store'), []);

        $response->assertSessionHasErrors([
            'title',
            'category',
            'date',
            'start_time'
        ]);
    }

    public function test_user_bisa_mengupdate_jadwal()
    {
        $schedule = Schedule::create([
            'title' => 'Judul Lama',
            'category' => 'Lama',
            'start' => now(),
            'end' => now()->addHour(),
            'date' => now()->format('Y-m-d'),
            'status' => 'Akan Datang'
        ]);

        $newData = [
            'title' => 'Judul Baru Revisi',
            'category' => 'Baru',
            'date' => now()->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '10:00',
            'status' => 'Selesai',
            'location' => 'Masjid Utama'
        ];

        $response = $this->put(route('penjadwalan.update', $schedule->id), $newData);

        $response->assertRedirect(route('penjadwalan'));

        $this->assertDatabaseHas('schedules', [
            'id' => $schedule->id,
            'title' => 'Judul Baru Revisi',
            'status' => 'Selesai'
        ]);
    }

    public function test_user_bisa_menghapus_jadwal()
    {
        $schedule = Schedule::create([
            'title' => 'Akan Dihapus',
            'category' => 'Sampah',
            'start' => now(),
            'end' => now(),
            'date' => now()->format('Y-m-d'),
            'status' => 'Hari Ini'
        ]);

        $response = $this->delete(route('penjadwalan.destroy', $schedule->id));

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Agenda dihapus']);

        $this->assertDatabaseMissing('schedules', [
            'id' => $schedule->id
        ]);
    }
}
