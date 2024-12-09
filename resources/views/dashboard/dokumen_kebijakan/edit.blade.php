@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Dokumen Kebijakan</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/dokumen_kebijakan/{{ $dokumen->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="file" class="form-label">Dokumen Sebelumnya</label>
                <div>
                    <a href="{{ asset('storage/' . $dokumen->file_path) }}" class="btn btn-secondary" download>
                        Unduh Dokumen Sebelumnya
                    </a>
                </div>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Unggah Dokumen Baru</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file"
                    name="file">
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Dokumen</button>
        </form>
    </div>
@endsection
