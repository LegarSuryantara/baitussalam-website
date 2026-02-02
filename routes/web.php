<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Beranda & Auth
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('berandaPage'))->name('beranda');

Route::post('/login',  [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', fn() => view('profilePage'))->name('profile');
Route::get('/kontak',  fn() => view('kontakPage'))->name('kontak');


/*
|--------------------------------------------------------------------------
| Layanan Masjid
|--------------------------------------------------------------------------
*/

Route::prefix('')->group(function () {

  Route::get('/zakatinfaq', fn() => view('layanan_masjid/zakatPage'))
    ->name('zakatinfaq');

  Route::get('/literasikeagamaan', fn() => view('layanan_masjid/literasiPage'))
    ->name('literasikeagamaan');

  Route::get('/peminjamanfasilitas', fn() => view('layanan_masjid/peminjamanPage'))
    ->name('peminjamanfasilitas');
});

/*
|--------------------------------------------------------------------------
| Penjadwalan Masjid
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('penjadwalan')->group(function () {

  Route::get('/calendar', [ScheduleController::class, 'index'])
    ->name('index-penjadwalan');

  Route::post('/create', [ScheduleController::class, 'store'])
    ->name('schedule.store');

  Route::get('/events', [ScheduleController::class, 'getEvents'])
    ->name('schedule.events');

  Route::post('/update/{id}', [ScheduleController::class, 'update'])
    ->name('schedule.update');

  Route::delete('/delete/{id}', [ScheduleController::class, 'deleteEvent'])
    ->name('schedule.delete');

  Route::get('/search', [ScheduleController::class, 'search'])
    ->name('schedule.search');

});


Route::get('/penjadwalan', [ScheduleController::class, 'calendarPage'])
  ->name('penjadwalan');

Route::get('/penjadwalan/events', [ScheduleController::class, 'getEvents']);

Route::get('/penjadwalan/agenda', [ScheduleController::class, 'agendaByDate']);

Route::get('/penjadwalan/create', [ScheduleController::class, 'form'])
  ->name('penjadwalan.create');

Route::get('/penjadwalan/edit/{id}', [ScheduleController::class, 'form'])
  ->name('penjadwalan.edit');

Route::post('/penjadwalan/save', [ScheduleController::class, 'store'])
  ->name('penjadwalan.store');

Route::put('/penjadwalan/save/{id}', [ScheduleController::class, 'update'])
  ->name('penjadwalan.update');

Route::delete('/penjadwalan/delete/{id}', [ScheduleController::class, 'destroy'])
  ->name('penjadwalan.destroy');

Route::get('/penjadwalan/lihat/{id}', [ScheduleController::class, 'show'])
  ->name('penjadwalan.show');

/*
|--------------------------------------------------------------------------
| Kegiatan Masjid
|--------------------------------------------------------------------------
*/

Route::prefix('kegiatan')->group(function () {

  Route::get('/', fn() => view('kegiatan_masjid/kegiatanPage'))
    ->name('kegiatan');

  Route::get('/lihat', fn() => view('kegiatan_masjid/lihatPage'))
    ->name('lihatkegiatan');

  Route::get('/lihat/edit', fn() => view('kegiatan_masjid/editPage'))
    ->name('editkegiatan');
});


/*
|--------------------------------------------------------------------------
| Donasi
|--------------------------------------------------------------------------
*/

Route::get('/donasi', fn() => view('donasiPage'))->name('donasi');




/*
|--------------------------------------------------------------------------
| Organisasi Masjid
|--------------------------------------------------------------------------
*/

Route::prefix('organisasi')->group(function () {

  Route::get('/', fn() => view('organisasi_masjid/organisasiPage'))
    ->name('organisasi');

  Route::get('/remajamasjid', fn() => view('organisasi_masjid/remajaMasjidPage'))
    ->name('remajamasjid');

  Route::get('/pengajianannisa', fn() => view('organisasi_masjid/pengajianannisaPage'))
    ->name('pengajianannisa');

  Route::get('/pengajianbapak', fn() => view('organisasi_masjid/pengajianbapakPage'))
    ->name('pengajianbapak');
});


/*
|--------------------------------------------------------------------------
| Galeri Masjid
|--------------------------------------------------------------------------
*/

Route::prefix('galeri')->group(function () {

  Route::get('/', fn() => view('galeri_masjid/galeriPage'))
    ->name('galeri');

  Route::get('/idaroh', fn() => view('galeri_masjid/idarohPage'))
    ->name('galeriidaroh');

  Route::get('/riayah', fn() => view('galeri_masjid/riayahPage'))
    ->name('galeririayah');

  Route::get('/imarah', fn() => view('galeri_masjid/imarahPage'))
    ->name('galeriimarah');
});


/*
|--------------------------------------------------------------------------
| Dokumen Masjid
|--------------------------------------------------------------------------
*/

Route::prefix('dokumen')->group(function () {

  Route::get('/', fn() => view('dokumen_masjid/dokumenPage'))
    ->name('dokumen');

  Route::get('/adart', fn() => view('dokumen_masjid/adartPage'))
    ->name('adartlaporan');

  Route::prefix('laporankeuangan')->group(function () {

    Route::get('/', fn() => view('dokumen_masjid/laporan_keuangan/laporankeuanganPage'))
      ->name('laporankeuangan');

    Route::get('/lihat', fn() => view('dokumen_masjid/laporan_keuangan/lihatPage'))
      ->name('lihatlaporankeuangan');

    Route::get('/unggah', fn() => view('dokumen_masjid/laporan_keuangan/unggahPage'))
      ->name('unggahlaporankeuangan');
  });
});
