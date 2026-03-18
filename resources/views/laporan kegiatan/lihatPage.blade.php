<x-layout title="Detail Laporan Kegiatan | Baitussalam">
    <div>
        <div class="container my-4">

            <a href="{{ route('laporankegiatan')}}" class="text-decoration-none text-dark mb-3 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Kembali ke Laporan kegiatan
            </a>

            <div class="card shadow-sm mt-3">
                <div class="card-body">

                    <div class="text-center mb-4">
                        <h5 class="fw-bold mb-1">LAPORAN KEGIATAN MASJID</h5>
                        <small class="text-muted">PERIODE JANUARI 2026</small>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-receipt fs-3 me-3"></i>
                        <h6 class="fw-bold mb-0">LAPORAN KEGIATAN</h6>
                    </div>

                    <div class="border rounded p-3 mb-3">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <small class="text-muted">Jenis Dokumen</small>
                                <div>Laporan Kegiatan</div>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted">Periode</small>
                                <div>Januari 2026</div>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted">Dibuat Oleh</small>
                                <div>Bendahara</div>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted">Status</small><br>
                                <span class="badge badge-final statuslaporan">Final</span>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted">Terakhir Diedit</small>
                                <div>Bpk. Rohman</div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded p-3 mb-4">
                        <h6 class="fw-bold">Ringkasan Laporan</h6>
                        <p class="mb-0">
                            Laporan ini berisi rekap pemasukan dan pengeluaran Masjid Baitussalam
                            periode Januari 2026 yang telah disahkan oleh pengurus Takmir Masjid
                            Baitussalam.
                        </p>
                    </div>

                    <div class="text-center mb-3">
                        <button class="btn btn-success px-4">
                            <i class="bi bi-download me-2"></i>
                            Unduh Laporan kegiatan (Excel)
                        </button>
                    </div>

                    <div class="text-muted small">
                        <strong>Catatan Admin:</strong>
                        Perubahan isi laporan dilakukan di luar website dan diunggah kembali
                        dalam bentuk file PDF.
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-layout>
