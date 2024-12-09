@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Upload Dokumen Kebijakan</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/dokumen_kebijakan" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="buku_standart" class="form-label">Buku Standart</label>
                <input type="file" class="form-control @error('buku_standart') is-invalid @enderror" id="buku_standart"
                    name="buku_standart">
                @error('buku_standart')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sk" class="form-label">SK</label>
                <input type="file" class="form-control @error('sk') is-invalid @enderror" id="sk" name="sk">
                @error('sk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sop" class="form-label">SOP</label>
                <input type="file" class="form-control @error('sop') is-invalid @enderror" id="sop" name="sop">
                @error('sop')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Upload Dokumen</button>
        </form>
    </div>
@endsection
