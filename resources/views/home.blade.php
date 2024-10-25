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
        <button type="button" class="btn rounded-0 text-light">Email</button>
        <button type="button" class="btn rounded-0 text-light">Lokasi</button>
        <button type="button" class="btn rounded-0 text-light">Telepon</button>
    </div>
    <section id="About" class="py-4" style="background-color: #D9D9D9">
        <div class="img-group d-flex justify-content-between">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
            <img src="img/foto-dummy.png" class="rounded" alt="...">
        </div>
        <div class="about-desc text-center my-5">
            <h1>PROFIL UPM</h1>
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
        <div class="d-flex justify-content-between">
            <div class="left-column" style="width: 48%;">
                <!-- Content for the left column goes here -->
            </div>
            <div class="right-column d-flex justify-content-end" style="width: 48%;">
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </section>
    <section class="berita-kegiatan my-5">
        <h1 class="text-center mb-4">BERITA DAN KEGIATAN</h1>
        <div class="d-flex justify-content-center">
            <div class="card mx-2" style="width: 28rem;">
                <img src="img/berita.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque similique dolor
                        commodi quia et id ipsa dolorum ipsum illum obcaecati quod praesentium officiis, accusantium omnis
                        voluptatibus asperiores. Facilis molestias voluptatibus, tempore, perferendis adipisci quos quod
                        dicta culpa eaque dolore repellat voluptate porro impedit alias. Error nihil saepe dolores! Rerum,
                        tempora.</p>
                    <a href="#" class="btn btn-primary">Baca Selanjutnya</a>
                </div>
            </div>
            <div class="card mx-2" style="width: 28rem;">
                <img src="img/berita.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sed, ducimus
                        qui tempore a hic cum illo facilis culpa corporis commodi consequuntur exercitationem dolore maxime
                        officia, possimus quas inventore non itaque vero aspernatur harum quis deleniti. Nisi provident
                        deleniti, consectetur earum mollitia maxime consequatur laborum iure porro quis? Ipsa, reiciendis.
                    </p>
                    <a href="#" class="btn btn-primary">Baca selanjutnya</a>
                </div>
            </div>
        </div>
    </section>
@endsection
