<x-layout title="Ri'ayah | Baitussalam">
    <div>
        <div class="container my-4">

            <a href="{{ route('galeri') }}" class="text-decoration-none text-muted small mb-2 d-inline-block">
                ← Kembali ke Galeri
            </a>

            <h4 class="fw-bold mt-2">
                RI’AYAH (Perawatan dan Pemeliharaan Masjid )
            </h4>

            <p class="text-muted">
                Bidang Riayah bertanggung jawab terhadap perawatan, pemeliharaan, dan pengelolaan fasilitas masjid agar
                tetap bersih, aman, dan nyaman digunakan oleh jamaah dalam menjalankan ibadah dan kegiatan keagamaan.
            </p>

            <div class="section-divider"></div>

            <h6 class="fw-semibold mb-3">Galeri Foto</h6>

            <div class="row g-4">

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat koordinasi dan perencanaan
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pengelolaan administrasi dan keuangan
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Penjadwalan program masjid
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pelatihan bagi pengurus masjid
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Diskusi dan evaluasi program tahunan
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pengaturan inventaris dan logistik masjid
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat koordinasi Maulid Nabi Muhammad SAW
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat rutin bersama Takmir dan Remas
                        </p>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <h6 class="fw-semibold mb-3">Kegiatan Utama</h6>

            <ul class="list-unstyled">
                <li class="mb-2">
                    <i class="bi bi-star-fill text-success me-2"></i>
                    Perawatan bangunan masjid
                </li>
                <li class="mb-2">
                    <i class="bi bi-star-fill text-success me-2"></i>
                    Kebersihan dan Sanitasi
                </li>
                <li class="mb-2">
                    <i class="bi bi-star-fill text-success me-2"></i>
                    Keamanan dan fasilitas
                </li>
                <li class="mb-2">
                    <i class="bi bi-star-fill text-success me-2"></i>
                    Pengelolaan inventantaris fisik
                </li>
            </ul>

            <div class="d-flex justify-content-center justify-content-md-end mt-4">
                <button class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> Unggah Gambar
                </button>
            </div>

            <hr>

        </div>
    </div>
</x-layout>
