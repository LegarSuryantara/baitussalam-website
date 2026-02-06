<x-layout title="Unggah Laporan Kegiatan | Baitussalam">
    <div>
        <div class="container my-5">
            <a href="{{ route('laporankegiatan')}}" class="text-decoration-none text-dark mb-3 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Kembali ke Laporan Kegiatan
            </a>
            <h4 class="fw-bold mb-4">Unggah Dokumen Laporan Kegiatan</h4>

            <div class="card shadow-sm">
                <div class="card-body">

                    <form>
                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Judul Laporan</label>
                                    <input type="text" class="form-control shadow-sm"
                                        placeholder="Masukkan Judul Laporan...">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Periode</label>
                                    <select class="form-select shadow-sm">
                                        <option selected disabled>Pilih periode laporan...</option>
                                        <option>Januari 2026</option>
                                        <option>Februari 2026</option>
                                        <option>Maret 2026</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        Deskripsi <span class="text-muted">(Opsional)</span>
                                    </label>
                                    <textarea class="form-control shadow-sm" rows="4" placeholder="Deskripsi laporan..."></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 uploadboxcontainer">
                                <label class="form-label fw-semibold">Unggah Dokumen</label>

                                <div class="upload-box mb-2">
                                    <i class="bi bi-cloud-arrow-up upload-icon"></i>
                                    <p class="mt-2 mb-2 text-muted">Tidak ada file yang dipilih</p>

                                    <input type="file" class="d-none" id="fileInput">
                                    <label for="fileInput" class="btn btn-outline-secondary btn-sm">
                                        Pilih File
                                    </label>
                                </div>

                                <small class="text-muted d-block mb-3">
                                    Dokumen maksimal 10Mb (PDF, Excel, Word)
                                </small>

                                <button type="submit" class="btn btn-upload w-100">
                                    <i class="bi bi-cloud-arrow-up me-2"></i>
                                    Unggah Dokumen
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-layout>
