@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Akreditasi Baru</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/akreditasi">
            @csrf
            <div class="mb-3">
                <label for="status_peringkat" class="form-label">Status Peringkat</label>
                <input type="text" class="form-control @error('status_peringkat') is-invalid @enderror"
                    id="status_peringkat" name="status_peringkat" required autofocus value="{{ old('status_peringkat') }}">
                @error('status_peringkat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="doktor_jumlah" class="form-label">Jumlah Doktor</label>
                    <input type="number" class="form-control @error('doktor_jumlah') is-invalid @enderror"
                        id="doktor_jumlah" name="doktor_jumlah" required autofocus value="{{ old('doktor_jumlah') }}">
                    @error('doktor_jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="doktor_persentase" class="form-label">Persentase Doktor</label>
                    <input type="number" class="form-control @error('doktor_persentase') is-invalid @enderror"
                        id="doktor_persentase" name="doktor_persentase" required autofocus
                        value="{{ old('doktor_persentase') }}">
                    @error('doktor_persentase')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="magister_jumlah" class="form-label">Jumlah Magister</label>
                    <input type="number" class="form-control @error('magister_jumlah') is-invalid @enderror"
                        id="magister_jumlah" name="magister_jumlah" required autofocus value="{{ old('magister_jumlah') }}">
                    @error('magister_jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="magister_persentase" class="form-label">Persentase Magister</label>
                    <input type="number" class="form-control @error('magister_persentase') is-invalid @enderror"
                        id="magister_persentase" name="magister_persentase" required autofocus
                        value="{{ old('magister_persentase') }}">
                    @error('magister_persentase')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="sarjana_jumlah" class="form-label">Jumlah Sarjana</label>
                    <input type="number" class="form-control @error('sarjana_jumlah') is-invalid @enderror"
                        id="sarjana_jumlah" name="sarjana_jumlah" required autofocus value="{{ old('sarjana_jumlah') }}">
                    @error('sarjana_jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="sarjana_persentase" class="form-label">Persentase Sarjana</label>
                    <input type="number" class="form-control @error('sarjana_persentase') is-invalid @enderror"
                        id="sarjana_persentase" name="sarjana_persentase" required autofocus
                        value="{{ old('sarjana_persentase') }}">
                    @error('sarjana_persentase')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="profesi_jumlah" class="form-label">Jumlah Profesi</label>
                    <input type="number" class="form-control @error('profesi_jumlah') is-invalid @enderror"
                        id="profesi_jumlah" name="profesi_jumlah" required autofocus value="{{ old('profesi_jumlah') }}">
                    @error('profesi_jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="profesi_persentase" class="form-label">Persentase Profesi</label>
                    <input type="number" class="form-control @error('profesi_persentase') is-invalid @enderror"
                        id="profesi_persentase" name="profesi_persentase" required autofocus
                        value="{{ old('profesi_persentase') }}">
                    @error('profesi_persentase')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="total_jumlah" class="form-label">Jumlah Total</label>
                    <input type="number" class="form-control @error('total_jumlah') is-invalid @enderror" id="total_jumlah"
                        name="total_jumlah" required autofocus value="{{ old('total_jumlah') }}">
                    @error('total_jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="total_persentase" class="form-label">Persentase Total</label>
                    <input type="number" class="form-control @error('total_persentase') is-invalid @enderror"
                        id="total_persentase" name="total_persentase" required autofocus
                        value="{{ old('total_persentase') }}">
                    @error('total_persentase')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Upload Akreditasi</button>
        </form>
    </div>
@endsection
