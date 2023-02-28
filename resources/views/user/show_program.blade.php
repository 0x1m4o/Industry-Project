@extends('layouts.main')

@section('content')
<div class="card" style="margin-top: 100px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ Storage::url('public/programs/').$programs->gambar }}" class="card-img m-3" alt="Gambar Kartu">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold;">{{$programs->nama}}</h5>
          <p class="card-text d-flex"><i class='bx bxs-category align-items-center' style="font-size: 20px; padding-right: 5px;"></i> {{$programs->category}}</p>
          <p class="card-text">{!! $programs->deskripsi !!}</p>
          <a href="#" class="btn btn-primary">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
@endsection