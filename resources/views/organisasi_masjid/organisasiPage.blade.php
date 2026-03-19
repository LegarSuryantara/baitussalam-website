<x-layout title="Organisasi | Baitussalam">
    <div>
        <div class="herosectionOrganisasi">
            <div class="container">
                <h1 class="fw-bold">
                    Organisasi <br>
                    Masjid Baitussalam
                </h1>

                <a href="{{ route('penjadwalan') }}" class="btn btn-success rounded-pill px-4 py-2 mt-3">
                    Lihat Jadwal Kegiatan
                </a>
            </div>
        </div>

        {{-- <div class="container hero-card-wrapper">
            <div class="row justify-content-center g-4">
                <div class="col-md-4 col-lg-3">
                    <a class="text-decoration-none text-dark" href="{{ route('remajamasjid') }}">
                        <div class="card text-center border-0 shadow-sm rounded-4 p-4 cardItemsOrganisasi">
                            <i class="bi bi-people fs-1 mb-3"></i>
                            <p class="fw-semibold mb-0">Remaja Masjid</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-lg-3">
                    <a class="text-decoration-none text-dark" href="{{ route('pengajianannisa') }}">
                        <div class="card text-center border-0 shadow-sm rounded-4 p-4 cardItemsOrganisasi">
                            <i class="bi bi-person-hearts fs-1 mb-3"></i>
                            <p class="fw-semibold mb-0">Ibu-ibu Pengajian</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-lg-3">
                    <a class="text-decoration-none text-dark" href="{{ route('pengajianbapak') }}">
                        <div class="card text-center border-0 shadow-sm rounded-4 p-4 cardItemsOrganisasi">
                            <i class="bi bi-person fs-1 mb-3"></i>
                            <p class="fw-semibold mb-0">
                                Bapak-bapak <br> Pengajian / Jamaah
                            </p>
                        </div>
                    </a>
                </div> --}}

            </div>
        </div>

        <div class="container py-5">
            <h5 class="fw-bold mb-4">Kepengurusan Takmir Masjid Baitussalam</h5>

            <div class="d-flex align-items-start gap-3 gap-md-4 overflow-auto pb-4">

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/H. MATRAJI- PENASEHAT.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Penasehat</p>
                    <small class="takmir-role">H. MATRAJI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/H. CHOIRUL USTADI Y-PENASEHAT.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Penasehat</p>
                    <small class="takmir-role">H. CHOIRUL USTADI Y</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/MUHAMMAD NORAWI-Ketua Takmir.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Ketua Takmir</p>
                    <small class="takmir-role">MUHAMMAD NORAWI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/SOEPRIJADI- WAKIL KETUA .jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Wakil Ketua</p>
                    <small class="takmir-role">SOEPRIJADI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/JOKO SUPENO-SEKETARIS.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Sekretaris</p>
                    <small class="takmir-role">JOKO SUPENO</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/AGUNG SEDAYU-WAKIL SEKETARIS.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Wakil Sekretaris</p>
                    <small class="takmir-role">AGUNG SEDAYU</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/MOH. BUDIMAN-BENDAHARA.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Bendahara</p>
                    <small class="takmir-role">MOH. BUDIMAN</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/SLAMET SUROSO-BENDAHARA .jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Bendahara</p>
                    <small class="takmir-role">SLAMET SUROSO</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/1._AHMAD SUHRI-Koordinator BIDANG IDAROH .jpeg') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Koordinator Bp. Idaroh</p>
                    <small class="takmir-role">AHMAD SUHRI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/1._UST. FATURAHMAN-Koordinator BIDANG IMAROH .jpeg') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Koordinator Bp. Imaroh</p>
                    <small class="takmir-role">UST. FATURAHMAN</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/M. SHOLEH -Kordinator Bidang RI’AYAHjpeg.jpg') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Koordinator Bp. Ri'ayah</p>
                    <small class="takmir-role">M. SHOLEH</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/2._SAMUGI - PERIBADATAN.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Peribadatan</p>
                    <small class="takmir-role">SAMUGI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/3._UST. FATURROFIK- PERIBADATAN.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Peribadatan</p>
                    <small class="takmir-role">UST. FATURROFIK</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/5._WAHYUDIN-PENDIDIKAN.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Pendidikan</p>
                    <small class="takmir-role">WAHYUDIN</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/6._A HADI- PEMELIHARAAN.jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Pemeliharaan</p>
                    <small class="takmir-role">A HADI</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/8._RUSIYANTO- TEKNIK .jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">Teknik</p>
                    <small class="takmir-role">RUSIYANTO</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/BOY KADARISMAN- PHBI .jpeg') }}" class="takmir-img" loading="lazy">
                    <p class="takmir-name">PHBI</p>
                    <small class="takmir-role">BOY KADARISMAN</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/EDY PURWANTO - PEMBINA REMAJA MASJID.jpeg') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Pembina Remaja Masjid</p>
                    <small class="takmir-role">EDY PURWANTO</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/YOPPY BAYU IRAWAN- PEMBANGUNAN jpeg.jpg') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Pembangunan</p>
                    <small class="takmir-role">YOPPY BAYU IRAWAN</small>
                </div>

                <div class="takmir-card">
                    <img src="{{ asset('assets/images/Foto TAKMIR/M. FATHUR ALIF C- Infokom IT.png') }}"
                        class="takmir-img" loading="lazy">
                    <p class="takmir-name">Infokom IT</p>
                    <small class="takmir-role">M. FATHUR ALIF C</small>
                </div>

            </div>
        </div>



    </div>
</x-layout>
