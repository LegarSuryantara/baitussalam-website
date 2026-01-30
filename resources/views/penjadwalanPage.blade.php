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

                            <h5 class="fw-bold mb-1">Agenda Masjid</h5>
                            <p class="text-muted small mb-3">
                                Agenda Tanggal: <strong>17 Januari 2026</strong>
                            </p>

                            <div id="agendaList"></div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <script>
            function agendaCardTemplate(a) {
                return `
                    <div class="agenda-item mb-3">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h6 class="fw-semibold mb-0">${a.title}</h6>
                            <div>
                                <a class="btn btn-outline-success btn-sm rounded-pill px-3 me-1" href="{{ route('editPenjadwalan') }}">
                                    Edit Jadwal
                                </a>
                                <a class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                                    Hapus
                                </a>
                            </div>
                        </div>

                        <div class="agenda-info text-muted small">
                            <div class="mb-1">
                                <i class="bi bi-clock me-1"></i> ${a.time}
                            </div>
                            <div class="mb-1">
                                <i class="bi bi-geo-alt me-1"></i> ${a.location}
                            </div>
                            <div>
                                Kategori :
                                <span class="badge bg-success-subtle text-success px-3 rounded-pill">
                                    ${a.category}
                                </span>
                            </div>
                        </div>

                        <div class="text-end mt-3">
                            <a href="{{ route('lihatkegiatan') }}" class="btn btn-success btn-sm rounded-pill px-4">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                    `;
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const agendaData = [{
                        title: "Kajian Subuh",
                        start: "2026-01-17",
                        time: "05.00 - 06.30 WIB",
                        location: "Masjid Baitussalam",
                        category: "Kajian"
                    },
                    {
                        title: "Kajian Subuh",
                        start: "2026-01-18",
                        time: "05.00 - 06.30 WIB",
                        location: "Masjid Baitussalam",
                        category: "Kajian"
                    }
                ];

                const agendaList = document.getElementById('agendaList');

                agendaData.forEach(a => {
                    agendaList.innerHTML += agendaCardTemplate(a);
                });

                const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                    initialView: 'dayGridMonth',
                    events: agendaData
                });

                calendar.render();
            });
        </script>

    </div>

</x-layout>
