@extends('layouts.no-navfooter')


@section('content')

    <link rel="stylesheet" href="/css/auth.css">

    <div class="container">
        <div class="login mx-auto shadow-sm border p-5 rounded-3" style="max-width: 600px; margin: 7rem 0">
            <h1 class="text-center mb-5 fw-bold">Masuk</h1>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="form-control input" placeholder="vanessaoey@example.com" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Kata Sandi</label>
                    <input type="password" class="form-control input" placeholder="●●●●●●●●●●" id="password">
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