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

            <div class="section-divider"></div>

            <div class="accordion mt-4 d-md-none" id="idarohAccordion">

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#itemOne">
                            <i class="bi bi-file-earmark-text-fill me-2"></i> Administrasi & Perencanaan
                        </button>
                    </h2>
                    <div id="itemOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p class="small text-muted">
                                Fokus pada pengelolaan tata usaha, surat-menyurat, serta perencanaan program jangka
                                pendek dan panjang.
                            </p>
                            <div class="row mt-2 small">
                                <div class="col-md-6">
                                    <ul class="mb-0">
                                        <li>Mengelola administrasi dan keuangan</li>
                                        <li>Menyusun rencana program tahunan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemTwo">
                            <i class="bi bi-people-fill me-2"></i> Pembinaan & Logistik
                        </button>
                    </h2>
                    <div id="itemTwo" class="accordion-collapse collapse">
                        <div class="accordion-body small text-muted">
                            <ul class="mb-0">
                                <li>Pembinaan dan pelatihan bagi pengurus masjid</li>
                                <li>Mengatur inventaris dan logistik masjid</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

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
