@extends('layouts.main')

<style>
  .shadow-btn:hover {
    background-color: #1567aa !important;
  }
</style>

@section('content')
<div class="container pt-3 pb-5">
  @include('partials.messages')
    <div class="row g-5 mx-0 align-items-start">
      <div class="col-md-5">
        <img src="{{ Storage::url('public/programs/').$programs->gambar }}" class="rounded w-100" alt="Gambar Kartu">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h1 class="card-title" style="font-weight: bold;">{{$programs->nama}}</h1>
          <p class="card-text d-flex mt-1"><i class='bx bxs-category align-items-center' style="font-size: 20px; padding-right: 5px;"></i> {{$programs->category}}</p>
          <p class="card-text">{!! $programs->deskripsi !!}</p>
          @auth
            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary px-3 shadow-btn rounded-pill" style="background-color: #187BCD">Daftar Sekarang</button>
          @else
          <a href="/login" type="button" class="btn btn-primary px-3 shadow-btn rounded-pill" style="background-color: #187BCD">Daftar Sekarang</a>
          @endauth
        </div>
      </div>
    </div>
  </div>


  @auth
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pendaftaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('add.myprogram', $programs->id) }}">
          @csrf
          <div class="modal-body">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="input mb-3 form-control" placeholder="Vanessa Oey" value="{{ auth()->user()->name }}" required autofocus>
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="input mb-3 form-control" placeholder="vanessaoey@example.com" value="{{ auth()->user()->email }}" required>
            <label for="no_hp" class="form-label">Nomor Telepon</label>
            <input type="text" id="no_hp" name="no_hp" class="input mb-3 form-control" placeholder="08267891276" value="{{ auth()->user()->no_hp }}" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endauth
@endsection