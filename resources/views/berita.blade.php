@extends('layouts.main')

@section('content')
    <section id="berita">
        <div class="judul">
            <h1>{{ $postingan->title }}</h1>
        </div>
        <div class="container m-3 p-0">
            <p>Diupload pada tanggal :
                {{ \Carbon\Carbon::parse($postingan->published_at)->locale('id')->isoFormat('D MMMM Y') }}</p>
            <div class="div">
                <img src="{{ asset('storage/' . $postingan->image) }}" class="card-img-top w-50" alt="{{ $postingan->judul }}">
            </div>
            <p class="fs-5">{!! $postingan->body !!}</p>
        </div>
    </section>
@endsection
