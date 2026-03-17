<x-layout title="Penjadwalan | Baitussalam">
    <div class="container my-5">

        <h3 class="fw-bold mb-3">Penjadwalan Masjid</h3>

        <div class="card shadow-sm border-0 p-4">

            <div class="row g-4">

                <div class="col-lg-7">
                    <div id="calendar" class="calendar-box"></div>
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-sm rounded-4">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-2">

                                <h5 class="fw-bold mb-0">Agenda Masjid</h5>

                                @auth
                                    @if (auth()->user()->canManagePenjadwalan())
                                        <a href="javascript:void(0)" onclick="goToCreateAgenda()"
                                            class="btn btn-success btn-sm rounded-pill px-3">
                                            + Tambah Agenda
                                        </a>
                                    @endif
                                @endauth
                            </div>
                            <p class="text-muted small mb-3">
                                Tanggal: <strong id="agendaDateLabel">-</strong>
                            </p>
                            <div id="agendaList"></div>

                        </div>
                    </div>
                </div>

            </div>

        <div class="card shadow-sm border-0 p-4 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">Jadwal Jumat & Hari Raya</h5>
                @auth
                    @if (auth()->user()->canManagePenjadwalan())
                        <button class="btn btn-success btn-sm rounded-pill px-3" data-bs-toggle="modal"
                            data-bs-target="#prayerScheduleModal" onclick="resetPrayerForm()">
                            + Tambah Jadwal
                        </button>
                    @endif
                @endauth
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis</th>
                            <th>Khotib / Penceramah</th>
                            <th>Imam</th>
                            <th>Bilal</th>
                            @auth
                                @if (auth()->user()->canManagePenjadwalan())
                                    <th class="text-end">Aksi</th>
                                @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody id="prayerScheduleList">
                        <tr>
                            <td colspan="6" class="text-center text-muted">Memuat jadwal...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @auth
            @if (auth()->user()->canManagePenjadwalan())
                <!-- Modal Tambah/Edit Jadwal Ibadah -->
                <div class="modal fade" id="prayerScheduleModal" tabindex="-1" aria-labelledby="prayerScheduleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="prayerScheduleForm" method="POST" action="/penjadwalan/prayer-schedules">
                                @csrf
                                <input type="hidden" name="_method" id="prayerMethod" value="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="prayerScheduleModalLabel">Tambah Jadwal Ibadah</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kegiatan</label>
                                        <select name="type" id="prayerType" class="form-select" required>
                                            <option value="jumat">Sholat Jumat</option>
                                            <option value="idul_fitri">Sholat Idul Fitri</option>
                                            <option value="idul_adha">Sholat Idul Adha</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal</label>
                                        <input type="date" name="date" id="prayerDate" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Khotib / Penceramah</label>
                                        <input type="text" name="khotib" id="prayerKhotib" class="form-control"
                                            placeholder="Opsional">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Imam</label>
                                        <input type="text" name="imam" id="prayerImam" class="form-control"
                                            placeholder="Opsional">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Bilal</label>
                                        <input type="text" name="bilal" id="prayerBilal" class="form-control"
                                            placeholder="Opsional">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary rounded-pill px-3"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success rounded-pill px-3">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endauth

        </div>

        <script>
            let selectedDate = new Date().toISOString().slice(0, 10);
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const agendaList = document.getElementById('agendaList');

                const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                    initialView: 'dayGridMonth',
                    selectable: true,
                    editable: false,

                    events: '/penjadwalan/events',

                    dateClick: function(info) {
                        selectedDate = info.dateStr;

                        loadAgendaByDate(info.dateStr);
                        updateAgendaTitle(info.dateStr);
                    }
                });

                calendar.render();
                setInterval(() => {
                    loadAgendaByDate(selectedDate);
                }, 1200000); // 120 detik

                // load hari ini pertama kali
                const today = new Date().toISOString().slice(0, 10);
                loadAgendaByDate(today);
                updateAgendaTitle(today);

                function loadAgendaByDate(date) {
                    agendaList.innerHTML = '<p class="text-muted">Memuat agenda...</p>';

                    fetch(`/penjadwalan/agenda?date=${date}`)
                        .then(res => res.json())
                        .then(data => {

                            agendaList.innerHTML = '';

                            if (data.length === 0) {
                                agendaList.innerHTML = `
                        <p class="text-muted">Tidak ada agenda di tanggal ini.</p>
                    `;
                                return;
                            }

                            data.forEach(a => {
                                agendaList.innerHTML += agendaCardTemplate(a);
                            });
                        });
                }

                function updateAgendaTitle(dateStr) {
                    const el = document.querySelector('#agendaDateLabel');
                    if (!el) return;

                    const d = new Date(dateStr);
                    el.innerText = d.toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });
                }

                function agendaCardTemplate(a) {
                    return `
                        <div class="agenda-item mb-3 border-bottom pb-3">
                        @auth
                        @if (auth()->user()->canManagePenjadwalan())
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <h6 class="fw-semibold mb-0">${a.title}</h6>
                                <div>
                                    <a class="btn btn-outline-success btn-sm rounded-pill px-3 me-1"
                                    href="/penjadwalan/edit/${a.id}">
                                        Edit
                                    </a>
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-3"
                                            onclick="deleteAgenda(${a.id})">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        @endif
                        @endauth
                            <div class="agenda-info text-muted small">
                                <div class="mb-1">
                                    <i class="bi bi-clock me-1"></i>
                                    ${a.start_time} - ${a.end_time}
                                </div>
                                <div class="mb-1">
                                    <i class="bi bi-geo-alt me-1"></i>
                                    ${a.location}
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-success-subtle text-success px-3 rounded-pill">
                                            ${a.category}
                                    </span>

                                    <span class="badge ${getStatusBadgeClass(a.status)} px-3 rounded-pill">
                                            ${a.status}
                                    </span>
                                </div>
                            </div>

                            <div class="text-end mt-3">
                                <a href="/penjadwalan/lihat/${a.id}"
                                class="btn btn-success btn-sm rounded-pill px-4">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                        `;
                }

                function getStatusBadgeClass(status) {
                    switch (status) {
                        case 'Hari Ini':
                            return 'bg-success text-white';
                        case 'Akan Datang':
                            return 'bg-primary text-white';
                        case 'Selesai':
                            return 'bg-secondary text-white';
                        default:
                            return 'bg-light text-dark';
                    }
                }

            });
        </script>

        <script>
            function deleteAgenda(id) {
                confirmDelete('Hapus Agenda?', 'Agenda ini akan dihapus secara permanen.').then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/penjadwalan/delete/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                        'content')
                                }
                            })
                            .then(res => res.json())
                            .then(() => {
                                location.reload();
                            });
                    }
                });
            }
        </script>

        <script>
            function goToCreateAgenda() {
                if (!selectedDate) {
                    alert('Silakan pilih tanggal di kalender dulu');
                    return;
                }

                window.location.href = `/penjadwalan/create?date=${selectedDate}`;
            }
        </script>

        <script>
            let prayerSchedulesData = [];

            document.addEventListener('DOMContentLoaded', function() {
                loadPrayerSchedules();
            });

            function loadPrayerSchedules() {
                const list = document.getElementById('prayerScheduleList');
                fetch('/penjadwalan/prayer-schedules')
                    .then(res => res.json())
                    .then(data => {
                        prayerSchedulesData = data;
                        list.innerHTML = '';
                        if (data.length === 0) {
                            list.innerHTML = `<tr><td colspan="6" class="text-center text-muted fst-italic py-4">Admin Belum Update Jadwal Bilal, Khotib dan Imam</td></tr>`;
                            return;
                        }

                        const canManage = {{ auth()->check() && auth()->user()->canManagePenjadwalan() ? 'true' : 'false' }};

                        data.forEach((item, index) => {
                            let typeLabel = '';
                            if (item.type === 'jumat') typeLabel = '<span class="badge bg-success">Jumat</span>';
                            else if (item.type === 'idul_fitri') typeLabel = '<span class="badge bg-primary">Idul Fitri</span>';
                            else if (item.type === 'idul_adha') typeLabel = '<span class="badge bg-info">Idul Adha</span>';

                            const d = new Date(item.date);
                            const dateFormatted = d.toLocaleDateString('id-ID', {
                                day: 'numeric', month: 'long', year: 'numeric'
                            });

                            let actionHtml = '';
                            if (canManage) {
                                actionHtml = `
                                    <td class="text-end">
                                        <button class="btn btn-outline-success btn-sm rounded-pill px-3 me-1" 
                                            onclick='editPrayerSchedule(${index})'>Edit</button>
                                        <button class="btn btn-outline-danger btn-sm rounded-pill px-3" 
                                            onclick="deletePrayerSchedule(${item.id})">Hapus</button>
                                    </td>
                                `;
                            }

                            list.innerHTML += `
                                <tr>
                                    <td>${dateFormatted}</td>
                                    <td>${typeLabel}</td>
                                    <td>${escapeHtml(item.khotib || '-')}</td>
                                    <td>${escapeHtml(item.imam || '-')}</td>
                                    <td>${escapeHtml(item.bilal || '-')}</td>
                                    ${actionHtml}
                                </tr>
                            `;
                        });
                    });
            }
            
            function escapeHtml(text) {
                const map = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#039;'
                };
                return text.replace(/[&<>"']/g, function(m) { return map[m]; });
            }

            @auth
            @if(auth()->user()->canManagePenjadwalan())
            function resetPrayerForm() {
                document.getElementById('prayerScheduleForm').reset();
                document.getElementById('prayerScheduleForm').action = "/penjadwalan/prayer-schedules";
                document.getElementById('prayerMethod').value = "POST";
                document.getElementById('prayerScheduleModalLabel').innerText = "Tambah Jadwal Ibadah";
            }

            function editPrayerSchedule(index) {
                const item = prayerSchedulesData[index];
                resetPrayerForm();
                document.getElementById('prayerScheduleModalLabel').innerText = "Edit Jadwal Ibadah";
                document.getElementById('prayerScheduleForm').action = "/penjadwalan/prayer-schedules/" + item.id;
                document.getElementById('prayerMethod').value = "PUT";
                
                document.getElementById('prayerType').value = item.type;
                document.getElementById('prayerDate').value = item.date;
                document.getElementById('prayerKhotib').value = item.khotib || '';
                document.getElementById('prayerImam').value = item.imam || '';
                document.getElementById('prayerBilal').value = item.bilal || '';

                const modal = new bootstrap.Modal(document.getElementById('prayerScheduleModal'));
                modal.show();
            }

            function deletePrayerSchedule(id) {
                confirmDelete('Hapus Jadwal?', 'Jadwal ibadah ini akan dihapus secara permanen.').then((result) => {
                    if (result.isConfirmed) {
                        fetch('/penjadwalan/prayer-schedules/' + id, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }
                            })
                            .then(res => {
                                if(res.ok) {
                                    location.reload();
                                }
                            });
                    }
                });
            }
            @endif
            @endauth
        </script>

    </div>

</x-layout>
