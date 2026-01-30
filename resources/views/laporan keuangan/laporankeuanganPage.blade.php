<x-layout title="Laporan Keuangan | Baitussalam">
    <div>
        <div class="container laporanKeuanganContainer my-4">

            <a href="{{ route('dokumen') }}" class="text-decoration-none text-dark mb-3 d-inline-block">
                ← Kembali
            </a>

            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h4 class="fw-bold mb-1">Laporan Keuangan Masjid</h4>
                    <p class="text-muted mb-0">
                        Rekap laporan keuangan masjid per periode
                    </p>
                </div>

                <a href="{{ route('unggahlaporankeuangan') }}" class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> Unggah Dokumen
                </a>
            </div>

            <div class="card shadow-sm rounded-card p-4">

                <div class="d-flex flex-row mb-4 justify-content-between">


                    <div class="input-group search-box">
                        <input type="text" class="form-control " placeholder="Judul Laporan...">
                        <span class="input-group-search input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>

                    <div>
                        <select class="form-select w-auto">
                            <option selected>2025</option>
                            <option>2026</option>
                            <option>2024</option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Judul Laporan</th>
                                <th>Periode</th>
                                <th>Tanggal Upload</th>
                                <th>Dibuat Oleh</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Laporan Rekap Keuangan Bulanan</strong><br>
                                    <small class="text-muted">12 Januari 2026</small>
                                </td>
                                <td>Januari 2026</td>
                                <td>2 Januari 2026</td>
                                <td>Sekretaris</td>
                                <td class="text-center">
                                    <a href="{{ route('lihatlaporankeuangan') }}" class="btn btn-success btn-sm rounded-pill px-4">
                                        Lihat
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Laporan Keuangan Bulan Januari</strong><br>
                                    <small class="text-muted">28 Januari 2026</small>
                                </td>
                                <td>Januari 2026</td>
                                <td>2 Januari 2026</td>
                                <td>Sekretaris</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm rounded-pill px-4">
                                        Lihat
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>Laporan Tahunan 2025</strong><br>
                                    <small class="text-muted">2025</small>
                                </td>
                                <td>2025</td>
                                <td>2 Januari 2026</td>
                                <td>Ketua Takmir</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm rounded-pill px-4">
                                        Lihat
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</x-layout>
