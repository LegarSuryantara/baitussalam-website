<x-layout title="Edit Penjadwalan | Baitussalam">
    <div class="container my-4">

        <a href="{{ route('penjadwalan') }}" class="text-decoration-none text-dark mb-3 d-inline-block">
            ← Kembali ke Halaman Penjadwalan
        </a>

        <div class="card shadow-sm rounded-4 p-4">
            <h4 class="fw-bold mb-1">
                {{ $schedule->id ? 'Edit Jadwal Kegiatan' : 'Tambah Jadwal Kegiatan' }}
            </h4>
            <p class="text-muted mb-4">Hanya dapat diakses oleh takmir</p>

            {{-- FORM UTAMA (SATU-SATUNYA FORM) --}}
            <form method="POST"
                action="{{ $schedule->id 
                    ? route('penjadwalan.update', $schedule->id) 
                    : route('penjadwalan.store') }}">

                @csrf
                @if($schedule->id)
                @method('PUT')
                @endif

                <div class="row g-4">
                    <div class="col-lg-6">

                        <div class="mb-3">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" name="title"
                                class="form-control rounded-3"
                                value="{{ old('title', $schedule->title) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="category" class="form-select rounded-3">
                                <option {{ $schedule->category == 'Kajian' ? 'selected' : '' }}>Kajian</option>
                                <option {{ $schedule->category == 'Rutin' ? 'selected' : '' }}>Rutin</option>
                                <option {{ $schedule->category == 'Acara Besar' ? 'selected' : '' }}>Acara Besar</option>
                            </select>
                        </div>

                        <input type="hidden" name="date" value="{{ $schedule->date }}">
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control"
                                value="{{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('d F Y') }}"
                                readonly>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="location"
                                class="form-control rounded-3"
                                value="{{ old('location', $schedule->location) }}">
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <label class="form-label">Waktu</label>
                        <div class="d-flex gap-3 mb-3">
                            <input type="time" name="start_time"
                                class="form-control rounded-3"
                                value="{{ old('start_time', $schedule->start_time) }}">
                            <span class="align-self-center">-</span>
                            <input type="time" name="end_time"
                                class="form-control rounded-3"
                                value="{{ old('end_time', $schedule->end_time) }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select rounded-3">
                                <option {{ $schedule->status == 'Hari Ini' ? 'selected' : '' }}>Hari Ini</option>
                                <option {{ $schedule->status == 'Akan Datang' ? 'selected' : '' }}>Akan Datang</option>
                                <option {{ $schedule->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>

                    </div>

                    {{-- BUTTON ACTION --}}
                    <div class="col-12 d-flex justify-content-end gap-3 mt-3">

                        <button type="submit"
                            class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                            Simpan
                        </button>

                        @if($schedule->id)
                        <button type="button"
                            class="btn btn-danger px-4 py-2 rounded-pill shadow-sm"
                            onclick="deleteSchedule('{{ $schedule->id }}')">
                            Hapus
                        </button>
                        @endif

                        <a href="{{ route('penjadwalan') }}"
                            class="btn btn-outline-secondary px-4 py-2 rounded-pill">
                            Batal
                        </a>

                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- DELETE VIA AJAX (AMAN, TANPA NESTED FORM) --}}
    @if($schedule->id)
    <script>
        function deleteSchedule(id) {
            if (!confirm('Yakin hapus jadwal ini?')) return;

            fetch(`/penjadwalan/delete/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(res => res.json())
                .then(() => {
                    window.location.href = "{{ route('penjadwalan') }}";
                });
        }
    </script>
    @endif

</x-layout>