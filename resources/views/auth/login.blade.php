@extends('layouts.no-navfooter')

@section('content')

<div class="container">
    <div class="login mx-auto shadow-sm border p-5 rounded-3" style="max-width: 600px; margin: 7rem 0">
        <h1 class="text-center mb-5 fw-bold">Masuk</h1>
        @include('partials.messages')
            <form method="post" action="/login">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="form-control input @error('email') is-invalid @enderror" placeholder="vanessaoey@example.com" id="email" name="email" aria-describedby="emailHelp" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Kata Sandi</label>
                    <input type="password" class="form-control input @error('password') is-invalid @enderror" placeholder="●●●●●●●●●●" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 text-end">
                    <a href="/lupa-sandi" class="text-decoration-none text-dark" style="letter-spacing: 1px">Lupa Kata Sandi?</a>
                </div>
                <button type="submit" class="btn fs-4 btn-primary shadow-btn d-block w-100 rounded-pill" style="background-color: #187BCD">Masuk</button>
                <span class="mt-5 text-center d-block fs-5">Belum Punya Akun? <a href="/register" class="text-decoration-none" style="color: #187BCD;">Daftar Sekarang</a></span>
            </form>
        </div>
    </div>
    
@endsection