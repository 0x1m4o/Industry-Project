@extends('layouts.no-navfooter')

<style>
    .batal:hover {
        text-decoration: none !important;
    }
</style>

@section('content')

<div class="container">
    <div class="login mx-auto shadow-sm border px-5 pt-5 pb-3 rounded-3" style="max-width: 600px; margin: 7rem 0">
        <h1 class="text-center mb-4 fw-bold">Lupa Kata Sandi?</h1>
        @include('partials.messages')
        <p class="text-center mb-4" style="letter-spacing: 1px">Masukkan Email Anda untuk mengatur ulang kata sandi</p>
            <form method="post" action="/login">
            @csrf
                <div class="mb-4">
                    <label for="email" class="form-label fs-4">Email</label>
                    <input type="email" class="form-control input @error('email') is-invalid @enderror" placeholder="vanessaoey@example.com" id="email" name="email" aria-describedby="emailHelp" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn fs-4 btn-primary shadow-btn d-block w-100 rounded-pill mb-3" style="background-color: #187BCD"  data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim</button>
                <a href="/login" class="btn batal fs-4 btn-outline-dark d-block w-100 rounded-pill">Batal</a>
            </form>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center px-5 py-4">
                    <h1 class="modal-title fs-1 fw-bold mb-3" id="exampleModalLabel">Berhasil</h1>
                    <p class="mb-4" style="letter-spacing: 1px">Email telah dikirim, silahkan periksa Email Anda untuk mengatur ulang kata sandi.</p>
                    <button type="button" class="btn btn-lg d-block btn-outline-dark rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection