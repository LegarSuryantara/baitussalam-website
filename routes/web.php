<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('berandaPage'))->name('beranda');
Route::get('/profile', fn () => view('profilePage'))->name('profile');
Route::get('/organisasi', fn () => view('organisasiPage'))->name('organisasi');
Route::get('/galeri', fn () => view('galeriPage'))->name('galeri');
Route::get('/kontak', fn () => view('kontakPage'))->name('kontak');
Route::get('/zakatinfaq', fn () => view('zakatPage'))->name('zakatinfaq');
Route::get('/literasikeagamaan', fn () => view('literasiPage'))->name('leterasikeagamaan');
Route::get('/peminjamanfasilitas', fn () => view('peminjamanPage'))->name('peminjamanfasilitas');
Route::get('/kegiatan', fn () => view('kegiatan masjid/kegiatanPage'))->name('kegiatan');
Route::get('/kegiatan/lihat', fn () => view('kegiatan masjid/lihatPage'))->name('lihatkegiatan');
Route::get('/kegiatan/lihat/edit', fn () => view('kegiatan masjid/editPage'))->name('editkegiatan');
Route::get('/donasi', fn () => view('donasiPage'))->name('donasi');
Route::get('/dokumen', fn () => view('dokumenPage'))->name('dokumen');
Route::get('/penjadwalan', fn () => view('penjadwalanPage'))->name('penjadwalan');
Route::get('/penjadwalan/edit', fn () => view('editPenjadwalanPage'))->name('editPenjadwalan');
Route::get('/organisasi/remajamasjid', fn () => view('remajaMasjidPage'))->name('remajamasjid');
Route::get('/organisasi/pengajianannisa', fn () => view('pengajianannisaPage'))->name('pengajianannisa');
Route::get('/organisasi/pengajianbapak', fn () => view('pengajianbapakPage'))->name('pengajianbapak');
Route::get('/galeri/idaroh', fn () => view('idarohPage'))->name('galeriidaroh');
Route::get('/galeri/riayah', fn () => view('riayahPage'))->name('galeririayah');
Route::get('/galeri/imarah', fn () => view('imarahPage'))->name('galeriimarah');
Route::get('/dokumen/laporankeuangan', fn () => view('laporan keuangan/laporankeuanganPage'))->name('laporankeuangan');
Route::get('/dokumen/laporankeuangan/lihat', fn () => view('laporan keuangan/lihatPage'))->name('lihatlaporankeuangan');
Route::get('/dokumen/laporankeuangan/unggah', fn () => view('laporan keuangan/unggahPage'))->name('unggahlaporankeuangan');
Route::get('/dokumen/adart', fn () => view('adartPage'))->name('adartlaporan');