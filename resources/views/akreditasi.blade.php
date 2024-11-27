@extends('layouts.main')

@section('content')
    <section id="akreditasi">
        <div class="judul">
            <h1>PROGRESS AKREDITASI</h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-10 table-responsive">
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
