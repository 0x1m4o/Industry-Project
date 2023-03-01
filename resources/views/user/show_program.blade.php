@extends('layouts.main')

<style>
  .shadow-btn:hover {
    background-color: #1567aa !important;
  }
</style>

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row mx-0 align-items-start">
      <div class="col-md-5">
        <img src="{{ Storage::url('public/programs/').$programs->gambar }}" class="rounded w-100" alt="Gambar Kartu">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h1 class="card-title" style="font-weight: bold;">{{$programs->nama}}</h1>
          <p class="card-text d-flex mt-1"><i class='bx bxs-category align-items-center' style="font-size: 20px; padding-right: 5px;"></i> {{$programs->category}}</p>
          <p class="card-text">{!! $programs->deskripsi !!}</p>
          <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary px-3 shadow-btn rounded-pill" style="background-color: #187BCD">Daftar Sekarang</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pendaftaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="input mb-3 form-control" placeholder="Vanessa Oey" required>
          <label for="nama" class="form-label">Email</label>
          <input type="text" class="input mb-3 form-control" placeholder="vanessaoey@example.com" required>
          <label for="nama" class="form-label">Nomor Telepon</label>
          <input type="text" class="input mb-3 form-control" placeholder="08267891276" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Daftar</button>
        </div>
      </div>
    </div>
  </div>
@endsection