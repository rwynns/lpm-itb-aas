@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto my-5">
                <h1 class="h4 mb-4 fw-normal text-center">Silahkan Register untuk mendaftar sebagai Admin</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 mt-3 py-2" type="submit">Register</button>
                </form>
                <p class="d-block text-center mt-3">Sudah mempunyai akun? <a href="/login">Login
                        disini!</a></p>
            </main>
        </div>
    </div>
@endsection
