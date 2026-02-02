<x-layout title="Imarah | Baitussalam">
    <div>
        <div class="container my-4">

            <a href="{{ route('galeri') }}" class="text-decoration-none text-muted small mb-2 d-inline-block">
                ← Kembali ke Galeri
            </a>

            <h4 class="fw-bold mt-2">
                IMARAH ( Kegiatan Keagamaan dan Dakwah )
            </h4>

            <p class="text-muted">
                Bidang Imarah berfokus pada penyelenggaraan kegiatan keagamaan, dakwah, dan pembinaan jamaah guna
                meningkatkan keimanan, ketakwaan, serta mempererat ukhuwah islamiyah di ingkungan masjid.
            </p>

            <div class="section-divider"></div>

            <div class="accordion mt-4" id="imarahAccordion">

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#itemOne">
                            <i class="bi bi-people-fill me-2"></i> Pembinaan Jamaah
                        </button>
                    </h2>
                    <div id="itemOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p class="small text-muted">
                                Kegiatan pembinaan yang ditujukan bagi jamaah dari berbagai kalangan
                                untuk meningkatkan pemahaman dan pengamalan ajaran Islam.
                            </p>

                            <strong class="small">Contoh Kegiatan :</strong>
                            <div class="row mt-2 small">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Pengajian rutin</li>
                                        <li>Pengajian tematik</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Kajian tematik</li>
                                        <li>Pembinaan akhlak dan ibadah</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemTwo">
                            <i class="bi bi-megaphone-fill me-2"></i> Pendidikan dan Dakwah
                        </button>
                    </h2>
                    <div id="itemTwo" class="accordion-collapse collapse">
                        <div class="accordion-body small text-muted">
                            Kegiatan dakwah, ceramah, dan pendidikan keislaman bagi masyarakat.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#itemThree">
                            <i class="bi bi-moon-stars-fill me-2"></i> Kegiatan Hari Besar Islam
                        </button>
                    </h2>
                    <div id="itemThree" class="accordion-collapse collapse">
                        <div class="accordion-body small text-muted">
                            Penyelenggaraan peringatan hari besar Islam seperti Maulid Nabi,
                            Isra Mi’raj, dan Ramadhan.
                        </div>
                    </div>
                </div>

            </div>

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

            <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> Unggah Gambar
                </button>
            </div>

            <hr>

        </div>
    </div>
</x-layout>
