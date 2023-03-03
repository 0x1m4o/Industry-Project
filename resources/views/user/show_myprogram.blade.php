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
          <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary px-3 shadow-btn rounded-pill" style="background-color: #187BCD">Ayo Mulai!</button>
        </div>
      </div>
    </div>
  </div>
@endsection