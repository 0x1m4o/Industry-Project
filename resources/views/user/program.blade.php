@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="css/profil.css">
<style>
    a {
        text-decoration: none;
        color: #000;
    }

    .card-program:hover {
        color: #000 !important;
    }

    div.border {
        transition: all .1s linear;
    }

    div.border:hover {
        background-color: #eeeeee;
        transition: all .1s linear;
    }

    .kategori:active {
        background-color: #187BCD !important;
        color: white !important;
    }

    .shadow-btn:hover {
        background-color: #1567aa !important;
    }
</style>


<header class="py-5" style="background: #f4f4f4">
    <div class="container px-lg-5 my-5">
        <div class="text-center text-dark">
            <h1 class="display-4 fw-bolder">Program</h1>
            <i class="lead fw-normal text-dark-50 mb-0">Menuju pengangguran 0%</i>
        </div>
    </div>
</header>

<div class="container p-0" style="margin-top: 100px;">
    <div class="row m-0 w-full g-2">
        <div class="d-flex justify-content-end">
            <div class="dropdown">
                <button class="btn btn-lg btn-primary shadow-btn rounded-pill dropdown-toggle" style="background-color: #187BCD" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </button>
                <ul class="dropdown-menu p-0">
                    <li><a class="dropdown-item kategori" href="#">Programming</a></li>
                    <li><a class="dropdown-item kategori" href="#">Networking</a></li>
                    <li><a class="dropdown-item kategori" href="#">Design</a></li>
                </ul>
            </div>
        </div>
        @forelse ($programs as $program)
        <a href="p">
        <div class="card" style="width: 25rem;">
            <div class="d-flex">
                <img src="{{ Storage::url('public/programs/').$program->gambar }}" class="card-img-top img-card" alt="...">
                <div class="my-1 w-100">
                    <h4 class="prog-title">{{$program->nama}}</h4>

                    <div class="d-flex justify-content-center mt-1">
                        <iconify-icon icon="iconoir:design-pencil" class="design-pen" width="25" height="25"></iconify-icon>
                        <h5 class="prog-title1">{{$program->category}}</h5>
                    </div>

                </div>
            </div>
            <p class="desc">{!! substr($program->deskripsi, 0, 100) !!}</p>
        </div>
        </a>
        @empty
        <div class="alert alert-danger">
            Data Program belum Tersedia.
        </div>
        </a>
        @endforelse
    </div>
    <button class="btn btn-lg btn-primary shadow-btn rounded-pill d-block mx-auto my-5" style="background-color: #187BCD">
        Muat Lebih Banyak
    </button>
</div>
@endsection