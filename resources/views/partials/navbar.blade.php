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
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
