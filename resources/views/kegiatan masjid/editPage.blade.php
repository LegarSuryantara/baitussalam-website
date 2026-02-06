<x-layout title="edit kegiatan">
    <div>
        <div class="container my-4 px-4">

            <a href="{{ route('lihatkegiatan') }}" class="text-decoration-none text-dark mb-3 d-inline-block">
                ← Kembali ke Halaman Kegiatan
            </a>

            <div class="card shadow-soft p-4">

                <h5 class="fw-bold">Edit Detail Kegiatan</h5>
                <p class="text-muted mb-4">Khusus takmir</p>

                <div class="row g-4">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" value="Kajian Fiqih Wanita">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" rows="3">
Kajian membahas tentang fiqih dan hukum-hukum Islam yang berkaitan dengan wanita
</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pemateri</label>
                            <input type="text" class="form-control" value="Ustadzah Aisyah">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Publikasi</label>
                            <select class="form-select">
                                <option selected>Dipublikasikan</option>
                                <option>Draft</option>
                                <option>Arsip</option>
                            </select>
                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select">
                                <option selected>Kajian</option>
                                <option>Pelatihan</option>
                                <option>Kegiatan Sosial</option>
                            </select>
                        </div>

                        <div class="border rounded p-3 text-center">

                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978"
                                class="preview-img mb-3">

                            <div class="mb-2 fw-semibold">
                                Unggah Gambar kegiatan (Optional)
                            </div>

                            <input type="file" class="form-control">

                        </div>

                    </div>

                </div>


                <div class="d-flex justify-content-end gap-2 mt-4">

                    <button class="btn btn-success px-4">
                        Simpan Perubahan
                    </button>

                    <button class="btn btn-danger px-4">
                        Hapus Kegiatan
                    </button>

                    <button class="btn btnBatal btn-outline-secondary px-4">
                        Batal
                    </button>

                </div>

            </div>

        </div>
    </div>
</x-layout>
