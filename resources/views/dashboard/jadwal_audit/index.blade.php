@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Jadwal Audit</h1>
    </div>

    @if (('session')('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-md-12 table-responsive">
        <a href="/dashboard/jadwal_audit/create" class="btn btn-primary mb-3">Buat Jadwal Audit Baru</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama Asesor</th>
                    <th scope="col">Program Studi Yang Di Audit</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal_audit as $jadwal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($jadwal->tanggal_audit)->locale('id')->translatedFormat('l, d F Y') }}
                        </td>
                        <td>{{ \Carbon\Carbon::parse($jadwal->jam_audit)->format('H:i') }}</td>
                        <td>{{ $jadwal->nama_asesor }}</td>
                        <td>{{ $jadwal->program_studi }}</td>
                        <td>{{ $jadwal->tempat }}</td>

                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="/dashboard/jadwal_audit/{{ $jadwal->id }}/edit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="/dashboard/jadwal_audit/{{ $jadwal->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah kamu yakin untuk menghapus postingan ini?')">
                                        <i class="bi bi-x-circle"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
