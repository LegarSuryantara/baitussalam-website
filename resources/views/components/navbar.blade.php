<div>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mobile-drawer" id="navbarNavDropdown">

                <button class="btn-close drawer-close d-lg-none" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown">
                </button>

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-house nav-icon"></i>
                            <span>Beranda</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-person nav-icon"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-people nav-icon"></i>
                            <span>Organisasi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-image nav-icon"></i>
                            <span>Galeri</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-headset nav-icon"></i>
                            <span>Layanan</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Zakat & Infaq</a></li>
                            <li><a class="dropdown-item" href="#">Literasi Keagamaan</a></li>
                            <li><a class="dropdown-item" href="#">Peminjaman Fasilitas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-telephone nav-icon"></i>
                            <span>Kontak</span>
                        </a>
                    </li>

                    <li class="searchBarMobile">
                        <x-SearchBar></x-SearchBar>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
