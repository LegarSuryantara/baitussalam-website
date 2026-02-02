<x-layout title="lihat | Baitussalam">
    <div>
        <div class="container my-4">

            <a href="{{ route('kegiatan') }}" class="text-decoration-none text-dark mb-3 d-inline-block">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>

            <h4 class="fw-bold mb-2">
                Kajian Subuh : Keutamaan shalat Berjamaah
            </h4>

            <div class="mb-3">
                <span class="badge bg-secondary me-2">Kajian</span>
                <span class="badge badge-soft">Akan Datang</span>
            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="card shadow-soft p-3">

                        <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae" class="event-img mb-3">

                        <h6 class="fw-bold">Deskripsi Kegiatan</h6>
                        <p>
                            Kajian Subuh rutin yang membahas pentingnya shalat berjamaah
                            dalam kehidupan sehari-hari.
                        </p>

                        <h6 class="fw-bold mt-4">Rangkaian Acara</h6>

                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Agenda</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>04.30</td>
                                        <td>Shalat Subuh</td>
                                        <td>Shalat berjamaah</td>
                                    </tr>
                                    <tr>
                                        <td>04.40</td>
                                        <td>Kajian</td>
                                        <td>Kajian oleh Ust. Ahmad Fauzi</td>
                                    </tr>
                                    <tr>
                                        <td>06.00</td>
                                        <td>Penutup</td>
                                        <td>Penutup acara</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card shadow-soft info-card p-3 mb-3">

                        <h6 class="fw-bold mb-3">Informasi Kegiatan</h6>

                        <p><i class="bi bi-calendar-event me-2"></i> Selasa, 12 Januari 2026</p>
                        <p><i class="bi bi-clock me-2"></i> 05.00 - 05.15 WIB</p>
                        <p><i class="bi bi-geo-alt me-2"></i> Masjid Baitussalam</p>
                        <p><i class="bi bi-person me-2"></i> Pemateri : Ust. Ahmad Fauzi</p>

                        <hr>

                        <p>
                            <i class="bi bi-tag me-2"></i>
                            Kategori :
                            <span class="badge badge-soft">Kajian</span>
                        </p>

                        <p><i class="bi bi-person-check me-2"></i> Dibuat Oleh : Takmir Masjid</p>
                        <p><i class="bi bi-pencil me-2"></i> Terakhir Diubah : 10 Januari 2026</p>

                        <a href="{{ route('penjadwalan' )}}" class="btn btn-success w-100 mb-2">
                            <i class="bi bi-calendar3 me-2"></i>Lihat Jadwal
                        </a>

                        <a href="{{ route('editkegiatan') }}" class="btn btn-outline-success w-100">
                            <i class="bi bi-pencil me-2"></i>Edit
                        </a>

                    </div>

                    <div class="card shadow-soft p-3">

                        <h6 class="fw-bold">Dokumen Terkait</h6>

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mt-2">

                            <div>
                                <strong>Proposal Kajian Subuh</strong>
                                <div class="text-muted small">10 Januari 2026</div>
                            </div>

                            <button class="btn btn-success btn-sm">
                                Unduh
                            </button>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>
