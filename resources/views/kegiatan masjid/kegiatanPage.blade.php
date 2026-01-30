<x-layout title="Kegiatan | Baitussalam">
    <div>
        <div class="container my-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <a href="{{ route('beranda') }}" class="text-decoration-none text-dark">←</a>
                    <span class="fw-bold ms-2">Kegiatan Masjid</span>
                </div>
                <a href="{{ route('editkegiatan') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-pencil"></i> Edit
                </a>
            </div>

            <div class="mb-4" id="fiterKegiatan">
                <div class="btn-group fiterKegiatanMenu rounded-pill p-2">
                    <a href="#" class="btn rounded-pill btn-sm px-3">
                        Semua
                    </a>
                    <a href="#" class="btn rounded-pill btn-sm px-3">
                        Rutin
                    </a>
                    <a href="#" class="btn rounded-pill btn-sm px-3">
                        Kajian
                    </a>
                    <a href="#" class="btn rounded-pill btn-sm px-3">
                        Acara Besar
                    </a>
                </div>
            </div>

    
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="card cardKegiatan h-100 shadow-sm border-0 rounded-4">
                        <div class="card-body">

     
                            <div class="d-flex justify-content-between mb-2">
                                <span class="rounded-pill fw-normal badgeKegiatan temaKegiatan">RUTIN</span>
                                <span class="rounded-pill badgeKegiatan fw-normal statusKegiatan">Hari ini</span>
                            </div>

                            <div class="d-flex gap-3">
                                <img src="assets/images/fotoProfile.jpg" class="rounded-3" width="60" height="60"
                                    style="object-fit:cover">
                                <div>
                                    <h6 class="fw-bold mb-1">Kajian Subuh</h6>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-person"></i> Ust. Ahmad Fauzi
                                    </small>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-calendar"></i> 30 Januari 2026
                                    </small>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-clock"></i> 05.00 - 06.30 WIB
                                    </small>
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt"></i> Masjid Baitussalam
                                    </small>
                                </div>
                            </div>

                            
                            <div class="mt-3">
                                <a href="{{ route('lihatkegiatan') }}" class="btn detailButtonKegiatan w-100 rounded-pill">
                                    Lihat Detail
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            
                <div class="col-lg-4 col-md-6">
                    <div class="card cardKegiatan h-100 shadow-sm border-0 rounded-4">
                        <div class="card-body">

                            <div class="d-flex justify-content-between mb-2">
                                <span class="rounded-pill badgeKegiatan fw-normal temaKegiatan">ACARA BESAR</span>
                                <span class="rounded-pill badgeKegiatan fw-normal statusKegiatan">Akan Datang</span>
                            </div>

                            <h6 class="fw-bold">Maulid Nabi Muhammad SAW</h6>
                            <small class="text-muted d-block">
                                <i class="bi bi-person"></i> KH. Husen Alwi
                            </small>
                            <small class="text-muted d-block">
                                <i class="bi bi-calendar"></i> 10-01-2026
                            </small>
                            <small class="text-muted">
                                <i class="bi bi-geo-alt"></i> Masjid Baitussalam
                            </small>

                            <div class="mt-3">
                                <a href="#" class="btn btnKegiatan detailButtonKegiatan w-100 rounded-pill">
                                    Lihat Detail
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="border rounded-4 text-center p-4 mt-5 text-muted">
                <i class="bi bi-calendar-x fs-2"></i>
                <p class="fw-semibold mt-2 mb-0">Belum ada kegiatan</p>
                <small>Silahkan cek kembali nanti</small>
            </div>

        </div>
    </div>
</x-layout>
