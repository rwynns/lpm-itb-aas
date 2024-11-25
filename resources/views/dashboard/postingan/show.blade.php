@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mt-5 mb-3">{{ $postingan->title }}</h1>
    <p>{{ \Carbon\Carbon::parse($postingan->published_at)->locale('id')->isoFormat('D MMMM Y') }}</p>
    <a href="/dashboard/postingan" class="btn btn-success mb-3"><i class="bi bi-arrow-left me-2"></i>Kembali ke Dashboard
        Postingan</a>
    <a href="/dashboard/postingan/{{ $postingan->id }}/edit" class="btn btn-warning mb-3"><i
            class="bi bi-pencil-square me-2"></i>Edit Postingan</a>
    <form action="/dashboard/postingan/{{ $postingan->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Apakah kamu yakin untuk menghapus postingan ini?')"><i
                class="bi bi-x-circle me-2"></i>Hapus
            Postingan</button>
    </form>
    <div>
        <img src="{{ asset('storage/' . $postingan->image) }}" class="w-50" alt="" srcset="">
    </div>
    <p class="fs-5">{!! $postingan->body !!}</p>
@endsection
