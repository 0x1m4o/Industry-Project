@extends('layouts.no-navfooter')


@section('content')

<link rel="stylesheet" href="/css/auth.css">
    
    <div class="container">
        <div class="login mx-auto shadow-sm border p-5 rounded-3" style="max-width: 600px; margin: 2rem 0">
            <h1 class="text-center mb-5 fw-bold">Daftar</h1>
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label fs-4">Nama Lengkap</label>
                    <input type="text" class="input form-control" id="nama" aria-describedby="emailHelp" placeholder="Vanessa Oey">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="input form-control" id="email" aria-describedby="emailHelp" placeholder="vanessaoey@example.com">
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label fs-4">No Telepon</label>
                    <input type="tel" class="input form-control" id="tel" aria-describedby="emailHelp" placeholder="08123456789">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Kata Sandi</label>
                    <input type="password" class="input form-control" id="password" placeholder="●●●●●●●●●●">
                </div>
                <div class="mb-4">
                    <label for="password1" class="form-label fs-4">Konfirmasi Kata Sandi</label>
                    <input type="password" class="input form-control" id="password1" placeholder="●●●●●●●●●●">
                </div>
                <button type="submit" class="btn fs-4 btn-primary shadow-btn d-block w-100 rounded-pill" style="background-color: #187BCD">Daftar</button>
                <span class="mt-5 text-center d-block fs-5">Sudah Punya Akun? <a href="/login" class="text-decoration-none" style="color: #187BCD;">Masuk Sekarang</a></span>
            </form>
        </div>
    </div>
    
@endsection