@props(['title' => 'Baitussalam'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>

    {{-- 2. SEO Meta Tags --}}
    <meta name="description"
        content="Website Resmi Masjid Baitussalam Kalirejo Permai. Informasi kegiatan, jadwal sholat, donasi, dan layanan jamaah.">
    <meta name="keywords" content="masjid, baitussalam, kalirejo permai, jadwal sholat, donasi masjid, kegiatan masjid">
    <meta name="author" content="Masjid Baitussalam">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} | Baitussalam">
    <meta property="og:description" content="Website Resmi Masjid Baitussalam Kalirejo Permai.">
    <meta property="og:image" content="{{ asset('assets/images/logobaitussalam.png') }}?v={{ time() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet">

    <style>
        /* Modern aesthetic Page Loader */
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .loader-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        /* Modern Spinner - Double Ring */
        .premium-spinner {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            padding: 6px;
            background: conic-gradient(from 0deg, transparent 0%, #198754 100%);
            -webkit-mask: radial-gradient(farthest-side, transparent calc(100% - 6px), #fff 0);
            mask: radial-gradient(farthest-side, transparent calc(100% - 6px), #fff 0);
            animation: spin 1s linear infinite;
        }

        .loader-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 2px;
            color: #198754;
            animation: pulse-text 1.5s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes pulse-text {
            0%, 100% { opacity: 0.6; transform: scale(0.98); }
            50% { opacity: 1; transform: scale(1); }
        }

        .fade-out {
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    {{-- Aesthetic Page Loader Overlay --}}
    <div id="page-loader">
        <div class="loader-content">
            <div class="premium-spinner"></div>
            <div class="loader-text">BAITUSSALAM</div>
        </div>
    </div>


    {{-- header --}}
    <x-Header></x-Header>
    {{-- Konten halaman --}}
    <main>
        {{ $slot }}
    </main>

    <x-Footer></x-Footer>
    @include('auth.login')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Page Loader Logic
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('page-loader').classList.add('fade-out');
            }, 300);
        });

        // Show loader on page navigation
        window.addEventListener('beforeunload', function() {
            document.getElementById('page-loader').classList.remove('fade-out');
        });

        // Optional: Intercept some link clicks specifically to show loader immediately
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && !href.startsWith('#') && !href.startsWith('javascript') && this.target !== '_blank') {
                    document.getElementById('page-loader').classList.remove('fade-out');
                }
            });
        });

        // Global Confirmation Handler
        function confirmDelete(title, text, confirmButtonText = 'Ya, Hapus!') {
            return Swal.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: confirmButtonText,
                cancelButtonText: 'Batal',
                reverseButtons: true
            });
        }

        // Global Success Toast
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Akses Ditolak',
                text: "{{ session('error') }}",
                confirmButtonColor: '#198754'
            });
        @endif
    </script>
</body>

</html>
