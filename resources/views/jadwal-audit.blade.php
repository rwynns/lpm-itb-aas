@extends('layouts.main')

@section('content')
    <section id="daftar-audit">
        <div class="judul">
            <h1>JADWAL AUDIT</h1>
        </div>
        <div class="container my-5">
            <div class="col-md-12">
                <table class="table table-custom table-bordered">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Nama Asesor</th>
                            <th scope="col">Program Studi Yang Di Audit</th>
                            <th scope="col">Tempat</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($jadwal_audit as $jadwal)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ \Carbon\Carbon::parse($jadwal->tanggal_audit)->locale('id')->translatedFormat('l, d F Y') }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($jadwal->jam_audit)->format('H:i') }}</td>
                                <td>{{ $jadwal->nama_asesor }}</td>
                                <td>{{ $jadwal->program_studi }}</td>
                                <td>{{ $jadwal->tempat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
