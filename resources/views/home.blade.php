@extends('layouts.main')

@section('content')
    <section id="hero">
        <div class="hero">
            <div class="hero-content">
                <h1>LEMBAGA PENJAMINAN MUTU</h1>
                <p>INSTITUT TEKNOLOGI BISNIS AAS INDONESIA</p>
            </div>
        </div>
    </section>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button>EMAIL</button>
        <button>LOKASI</button>
        <button>TELEPON</button>
    </div>
    <section id="About" class="py-4" style="background-color: #D9D9D9">
        <div class="img-group d-flex justify-content-between">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
        </div>
        <div class="about-desc text-center my-5">
            <div class="section-title">
                <h2>PROFIL UPM</h2>
            </div>
            <div class="rounded-div">
                <p>Unit Pengelola Program (UPM) di Institut Teknologi dan Bisnis AAS Indonesia adalah lembaga yang
                    bertanggung
                    jawab atas pengelolaan dan pengembangan program akademik di lingkungan institut. UPM memastikan bahwa
                    setiap
                    program studi dijalankan sesuai dengan standar pendidikan yang berlaku, serta mendukung peningkatan
                    kualitas
                    akademik melalui inovasi kurikulum dan evaluasi berkala. UPM juga berperan dalam pengawasan administrasi
                    akademik, akreditasi program, dan pelatihan dosen, sehingga mampu mencetak lulusan yang berdaya saing di
                    dunia kerja dan bisnis.</p>
            </div>
        </div>
    </section>
    <section id="activity" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>AGENDA</h2>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="section-title">
                        <h2>SERTIFIKAT AKREDITASI PROGRAM STUDI</h2>
                    </div>
                    @php
                        $sk = App\Models\SkAkreditasi::first();
                    @endphp

                    @if ($sk)
                        <a href="{{ asset('storage/' . $sk->file_path) }}" class="btn btn-success mt-3" target="_blank">
                            Unduh SK Akreditasi
                        </a>
                    @else
                        <button class="btn btn-secondary mt-3" disabled>
                            SK Akreditasi Belum Tersedia
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="berita-kegiatan my-5">
        <div class="section-title">
            <h2>BERITA DAN KEGIATAN</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($postingans as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                alt="{{ $post->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/berita/{{ $post->slug }}" class="btn btn-primary">Baca Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
