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
                            <th scope="col">SUDAH TERJADWAL</th>
                            <th scope="col">BELUM TERJADWAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tes 1</td>
                            <td>Tes 2</td>
                        </tr>
                        <tr>
                            <td>Contoh 1</td>
                            <td>Contoh 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
