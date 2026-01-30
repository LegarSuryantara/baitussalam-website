<x-layout title="Edit Penjadwalan | Baitussalam">
    <div>
        <div class="container my-4">
            <a href="{{ route('penjadwalan') }}" class="text-decoration-none text-dark mb-3 d-inline-block">
                ← Kembali ke Halaman Penjadwalan
            </a>

            <div class="card shadow-sm rounded-4 p-4">
                <h4 class="fw-bold mb-1">Edit Jadwal Kegiatan</h4>
                <p class="text-muted mb-4">Hanya dapat diakses oleh takmir</p>

                <form>
                    <div class="row g-4">
                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label class="form-label">Nama Kegiatan</label>
                                <input type="text" class="form-control rounded-3" value="Kajian Fiqih Wanita">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select rounded-3">
                                    <option selected>Kajian</option>
                                    <option>Rutin</option>
                                    <option>Acara Besar</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-start-3" value="18 Januari 2026">
                                    <span class="input-group-text rounded-end-3">
                                        <i class="bi bi-calendar-event"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control rounded-3" value="Aula Masjid Baitussalam">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <label class="form-label">Waktu</label>
                            <div class="d-flex gap-3 mb-3">
                                <input type="time" class="form-control rounded-3" value="15:00">
                                <span class="align-self-center">-</span>
                                <input type="time" class="form-control rounded-3" value="16:30">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-select rounded-3">
                                    <option selected>Hari ini</option>
                                    <option>Akan Datang</option>
                                    <option>Selesai</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-12 d-flex justify-content-end gap-3 mt-3">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                                Simpan Perubahan
                            </button>

                            <button type="button" class="btn btn-danger px-4 py-2 rounded-pill shadow-sm">
                                Hapus Jadwal
                            </button>

                            <button type="button" class="btn btn-outline-secondary px-4 py-2 rounded-pill">
                                Batal
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
