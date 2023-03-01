@extends('layouts.main')

@section('content')
<style>
    a {
        text-decoration: none;
        color: #000;
    }

    a:hover {
        color: #000 !important;
    }

    div.border {
        transition: all .1s linear;
    }

    div.border:hover {
        background-color: #eeeeee; 
        transition: all .1s linear;
    }
</style>


<header class="py-5 mt-5" style="background: #f4f4f4">
    <div class="container px-lg-5 my-5">
        <div class="text-center text-dark">
            <h1 class="display-4 fw-bolder">Program</h1>
            <i class="lead fw-normal text-dark-50 mb-0">Menuju pengangguran 0%</i>
        </div>
    </div>
</header>

<div class="container p-0" style="margin-top: 100px;">
    <div class="dropdown text-end">
        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Programming</a></li>
          <li><a class="dropdown-item" href="#">Networking</a></li>
          <li><a class="dropdown-item" href="#">Design</a></li>
        </ul>
      </div>
    <div class="row m-0 w-full g-2">
        @forelse ($programs as $program)
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('user.show', $program->id) }}">
                <div class="border rounded-3 p-3 mt-3">
                    <div class="d-flex align-items-start gap-3">
                        <img src="{{ Storage::url('public/programs/').$program->gambar }}" width="160" height="110" class="rounded">
                        <div>
                            <h4>{{$program->nama}}</h4>
                            <div class="d-flex gap-2 align-items-center">
                                <i class='bx bxs-category' style="font-size: 20px;"></i>
                                <span>{{$program->category}}</span>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">{!! substr($program->deskripsi, 0, 100) !!} ...</p>
                </div>
            </a>
        </div>
        @empty
        <div class="alert alert-danger">
            Data Program belum Tersedia.
        </div>
        @endforelse
    </div>
</div>
@endsection