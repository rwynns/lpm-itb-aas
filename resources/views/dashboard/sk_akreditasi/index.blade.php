@extends('dashboard.layouts.main')

@section('container')
    <h1 class="h2">SK Akreditasi</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($sk)
        <p>File SK Akreditasi saat ini:</p>
        <a href="{{ asset('storage/' . $sk->file_path) }}" target="_blank">Lihat SK Akreditasi</a>

        <form action="{{ route('sk-akreditasi.update', $sk->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="file" class="form-label">Ganti File SK Akreditasi</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @else
        <p>Belum ada file SK Akreditasi yang diunggah.</p>

        <form action="{{ route('sk-akreditasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file" class="form-label">Unggah File SK Akreditasi</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    @endif
@endsection
