@extends('layouts.no-navfooter')

@section('content')

    <div class="container">
        <div class="login mx-auto shadow-sm border px-5 pt-5 pb-4 rounded-3" style="max-width: 600px; margin: 2rem 0">
            <h1 class="text-center mb-5 fw-bold">Atur Ulang</h1>
            <form method="post" action="/register">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="input form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" readonly value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Kata Sandi Baru</label>
                    <input type="password" class="input form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="●●●●●●●●●●">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="form-label fs-4">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" class="input form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password" placeholder="●●●●●●●●●●">
                    @error('confirm_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn fs-4 btn-primary shadow-btn d-block w-100 rounded-pill" style="background-color: #187BCD">Kirim</button>
            </form>
        </div>
    </div>
    
@endsection