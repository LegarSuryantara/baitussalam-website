<x-layout title="Dokumen Masjid | Baitussalm">
    <div>
        <div class="container my-5 px-4">

            <div class="mb-4">
                <h3 class="fw-bold mb-0">Dokumen Masjid</h3>
            </div>
            <hr>


            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="doc-card">
                        <i class="bi bi-bar-chart-fill doc-icon"></i>
                        <div>
                            <h6 class="fw-bold">Laporan Keuangan</h6>
                            <p>Dokumen laporan keuangan masjid yang sudah diarsipkan dalam format PDF.</p>
                        </div>
                        <a href="{{ route('laporankeuangan') }}" class="doc-action">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="doc-card">
                        <i class="bi bi-clipboard-data doc-icon"></i>
                        <div>
                            <h6 class="fw-bold">Laporan Kegiatan</h6>
                            <p>Dokumen laporan kegiatan masjid yang sudah diarsipkan dalam format PDF.</p>
                        </div>
                        <a href="{{ route('laporankegiatan') }}" class="doc-action">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="doc-card">
                        <i class="fa-solid fa-scale-balanced doc-icon"></i>
                        <div>
                            <h6 class="fw-bold">AD / ART</h6>
                            <p>Dokumen resmi Anggaran Dasar dan Anggaran Rumah Tangga masjid dalam format PDF.</p>
                        </div>
                        <a href="{{ route('adartlaporan') }}" class="doc-action">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
