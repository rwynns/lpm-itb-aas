@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Saya</h1>
    </div>

    @if (('session')('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/postingan/create" class="btn btn-primary mb-3">Buat Postingan Baru</a>
        <table class="table table-sm">
            <thead>
                <tr class="text-center" style="font-size: 1.2rem">
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Diposting Tanggal</th>
                    <th scope="col" class="text-center w-50">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postingans as $postingan)
                    <tr class="text-center" style="font-size: 1rem">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $postingan->title }}</td>
                        <td>{{ \Carbon\Carbon::parse($postingan->published_at)->locale('id')->isoFormat('D MMMM Y') }}</td>
                        <td class="text-center">
                            <a href="/dashboard/postingan/{{ $postingan->id }}" class="btn btn-info"><i
                                    class="bi bi-eye me-2"></i>Lihat Postingan</a>
                            <a href="/dashboard/postingan/{{ $postingan->id }}/edit" class="btn btn-warning"><i
                                    class="bi bi-pencil-square me-2"></i>Edit</a>
                            <form action="/dashboard/postingan/{{ $postingan->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0"
                                    onclick="return confirm('Apakah kamu yakin untuk menghapus postingan ini?')"><i
                                        class="bi bi-x-circle me-2"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
