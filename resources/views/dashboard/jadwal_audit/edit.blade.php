@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Jadwal Audit</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/jadwal_audit/{{ $jadwal_audit->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="tanggal_audit" class="form-label">Tanggal Audit</label>
                <input type="date" class="form-control @error('tanggal_audit') is-invalid @enderror" id="tanggal_audit"
                    name="tanggal_audit" required value="{{ old('tanggal_audit', $jadwal_audit->tanggal_audit) }}">
                @error('tanggal_audit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jam_audit" class="form-label">Jam Audit</label>
                <input type="time" class="form-control @error('jam_audit') is-invalid @enderror" id="jam_audit"
                    name="jam_audit" required value="{{ old('jam_audit', $jadwal_audit->jam_audit) }}">
                @error('jam_audit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama_asesor" class="form-label">Nama Asesor</label>
                <input type="text" class="form-control @error('nama_asesor') is-invalid @enderror" id="nama_asesor"
                    name="nama_asesor" required value="{{ old('nama_asesor', $jadwal_audit->nama_asesor) }}">
                @error('nama_asesor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="program_studi" class="form-label">Program Studi Yang Di Audit</label>
                <input type="text" class="form-control @error('program_studi') is-invalid @enderror" id="program_studi"
                    name="program_studi" required value="{{ old('program_studi', $jadwal_audit->program_studi) }}">
                @error('program_studi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat"
                    name="tempat" required value="{{ old('tempat', $jadwal_audit->tempat) }}">
                @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Jadwal Audit</button>
        </form>
    </div>
@endsection
