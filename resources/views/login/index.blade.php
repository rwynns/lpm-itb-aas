@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto my-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 class="h4 mb-4 fw-normal text-center">Silahkan Login untuk masuk ke Dashboard Admin</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                </form>
                <p class="d-block text-center mt-3">Belum mempunyai akun? <a href="/register">Registrasi
                        sekarang!</a></p>
            </main>
        </div>
    </div>
@endsection
