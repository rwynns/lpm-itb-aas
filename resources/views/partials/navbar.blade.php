<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="/">
            <img src="img/logo.png" width="70" alt="">
        </a>
        <h5 class="mx-5">INSTITUT TEKNOLOGI<br>BISNIS AAS<br>INDONESIA</h5>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('akreditasi') ? 'active' : '' }}"
                        href="/akreditasi">AKREDITASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}" href="/layanan">LAYANAN</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('jadwal-audit') || Request::is('daftar-audit') ? 'active' : '' }}"
                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        AUDIT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/jadwal-audit">Jadwal Audit</a>
                        <a class="dropdown-item" href="/daftar-audit">Daftar Audit</a>
                        <a class="dropdown-item" href="#">Check Dokumen Hasil Audit</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/upm">UPM</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                            <path fill-rule="evenodd"
                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg></a>
                </li>
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Dashboard</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
