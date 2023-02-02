@extends('layouts.no-navfooter')

@section('content')

    <div class="container">
        <div class="login mx-auto shadow-sm border p-5 rounded-3" style="max-width: 600px; margin: 2rem 0">
            <h1 class="text-center mb-5 fw-bold">Daftar</h1>
            <form method="post" action="/register">
            @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label fs-4">Nama Lengkap</label>
                    <input type="text" class="input form-control @error('name') is-invalid @enderror" id="nama" name="name" aria-describedby="emailHelp" placeholder="Vanessa Oey" value="{{ old('name') }}" autofocus>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="input form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="vanessaoey@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label fs-4">No Telepon</label>
                    <input type="tel" class="input form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="08123456789" value="{{ old('no_hp') }}">
                    @error('no_hp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Kata Sandi</label>
                    <input type="password" class="input form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="●●●●●●●●●●">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="form-label fs-4">Konfirmasi Kata Sandi</label>
                    <input type="password" class="input form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" placeholder="●●●●●●●●●●">
                    @error('confirm_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn fs-4 btn-primary shadow-btn d-block w-100 rounded-pill" style="background-color: #187BCD">Daftar</button>
                <span class="mt-5 text-center d-block fs-5">Sudah Punya Akun? <a href="/login" class="text-decoration-none" style="color: #187BCD;">Masuk Sekarang</a></span>
            </form>
        </div>
    </div>
    
@endsection