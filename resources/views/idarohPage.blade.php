<x-layout title="Idaroh | Baitussalam">
    <div>
        <div class="container my-4">
            <a href="{{ route('galeri') }}" class="text-decoration-none text-muted small mb-2 d-inline-block">
                ← Kembali ke Galeri
            </a>
            <h4 class="fw-bold mt-2">
                IDAROH (Manajemen dan Administrasi)
            </h4>

            <p class="text-muted">
                Bidang IDAROH (Manajemen dan Administrasi) bertugas dalam mengelola administrasi,
                keuangan, dan perencanaan kegiatan di Masjid Baitussalam, termasuk pembinaan SDM
                dan pengaturan program-program masjid Baitussalam.
            </p>

            <h6 class="fw-semibold mb-3">Galeri Foto</h6>

            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat koordinasi dan perencanaan
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pengelolaan administrasi dan keuangan
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Penjadwalan program masjid
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pelatihan bagi pengurus masjid
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Diskusi dan evaluasi program tahunan
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Pengaturan inventaris dan logistik masjid
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat koordinasi Maulid Nabi Muhammad SAW
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="gallery-card">
                        <img src="{{ asset('assets/images/fotoProfile.jpg') }}" class="w-100">
                        <p class="text-muted">
                            Rapat rutin bersama Takmir dan Remas
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-none d-md-block">
                <div class="section-divider"></div>

                <h6 class="fw-semibold mb-3">Kegiatan Utama</h6>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-star-fill text-success me-2"></i>
                        Mengelola administrasi dan keuangan masyarakat
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-star-fill text-success me-2"></i>
                        Menyusun rencana program tahunan masjid
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-star-fill text-success me-2"></i>
                        Pembinaan dan pelatihan bagi pengurus masjid
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-star-fill text-success me-2"></i>
                        Mengatur inventaris dan logistik masjid
                    </li>
                </ul>
            </div>

            <div class="d-flex justify-content-center justify-content-md-end mt-4">
                <button class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> Unggah Gambar
                </button>
            </div>

            <hr>

        </div>
    </div>
</x-layout>
