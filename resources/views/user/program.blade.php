@extends('layouts.main')

@section('content')
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
        <div class="col-lg-4 col-md-6">
            <a class="card-program" href="{{ route('user.show', $program->id) }}">
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
    <button class="btn btn-lg btn-primary shadow-btn rounded-pill d-block mx-auto my-5" style="background-color: #187BCD">
        Muat Lebih Banyak
    </button>
</div>
@endsection