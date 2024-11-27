@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Akreditasi</h1>
    </div>

    @if (('session')('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-md-12 table-responsive">
        <a href="/dashboard/akreditasi/create" class="btn btn-primary mb-3">Buat Akreditasi Baru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" rowspan="2" class="text-center align-middle ">No</th>
                    <th scope="col" rowspan="2" class="text-center align-middle">Status/Peringkat</th>
                    <th scope="col" colspan="2" class="text-center">Doktor</th>
                    <th scope="col" colspan="2" class="text-center">Magister</th>
                    <th scope="col" colspan="2" class="text-center">Sarjana</th>
                    <th scope="col" colspan="2" class="text-center">Profesi</th>
                    <th scope="col" colspan="2" class="text-center">Total</th>
                    <th scope="col" rowspan="2" class="text-center align-middle ">Action</th>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <th>Persentase</th>
                    <th>Jumlah</th>
                    <th>Persentase</th>
                    <th>Jumlah</th>
                    <th>Persentase</th>
                    <th>Jumlah</th>
                    <th>Persentase</th>
                    <th>Jumlah</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($akreditasi as $akreditasi)
                    <tr class="text-center" style="font-size: 1rem">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $akreditasi->status_peringkat }}</td>
                        <td>{{ $akreditasi->doktor_jumlah }}</td>
                        <td>{{ $akreditasi->doktor_persentase }}</td>
                        <td>{{ $akreditasi->magister_jumlah }}</td>
                        <td>{{ $akreditasi->magister_persentase }}</td>
                        <td>{{ $akreditasi->sarjana_jumlah }}</td>
                        <td>{{ $akreditasi->sarjana_persentase }}</td>
                        <td>{{ $akreditasi->profesi_jumlah }}</td>
                        <td>{{ $akreditasi->profesi_persentase }}</td>
                        <td>{{ $akreditasi->total_jumlah }}</td>
                        <td>{{ $akreditasi->total_persentase }}</td>
                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="/dashboard/akreditasi/{{ $akreditasi->id }}/edit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="/dashboard/akreditasi/{{ $akreditasi->id }}" method="POST" class="d-inline">
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
