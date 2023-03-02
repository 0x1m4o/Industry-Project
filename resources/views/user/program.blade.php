@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="/css/profil.css">
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
            <i class="lead fw-normal text-dark-50 mb-0">Program Pelatihan yang ada di IT Club</i>
        </div>
    </div>
</header>

<div class="container p-0 my-4">
    <div class="row m-0 g-3">
        <div class="d-flex justify-content-end mb-2">
            {{-- <div class="dropdown">
                <button class="btn btn-lg btn-primary shadow-btn rounded-pill dropdown-toggle" style="background-color: #187BCD" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </button>
                <ul class="dropdown-menu p-0">
                    <li><a class="dropdown-item kategori" href="#">Programming</a></li>
                    <li><a class="dropdown-item kategori" href="#">Networking</a></li>
                    <li><a class="dropdown-item kategori" href="#">Design</a></li>
                </ul>
            </div> --}}
            <form action="/program" method="GET">
                @csrf
                <select class="form-select" style="width: 200px;" name="category">
                    <option value="Programming" selected="{{isset($_GET['category']) && $_GET['category'] == 'Programming'}}">Programming</option>
                    <option value="Design" selected="{{isset($_GET['category']) && $_GET['category'] == 'Design'}}">Design</option>
                    <option value="Networking" selected="{{isset($_GET['category']) && $_GET['category'] == 'Networking'}}">Networking</option>
                </select>
            </form>
        </div>
        @forelse ($programs as $program)
        <div class="col-lg-4 col-md-6">
            <a href={{ route('user.show', ['id'=>$program->id]) }}>
                <div class="card w-full">
                    <div class="d-flex align-items-start">
                        <img src="{{ Storage::url('public/programs/').$program->gambar }}" class="card-img-top img-card rounded" style="width: 200px; height: 100px; object-fit: cover;">
                        <div class="my-1 w-100 ms-2">
                            <h4 class="mt-1">
                                @if (strlen($program->nama) >= 35)
                                    {!! substr($program->nama, 0, 35   ).'...' !!}
                                @else
                                    {!! $program->nama !!}
                                @endif
                            </h4>
                            <div class="d-flex justify-content-start mt-1">
                                <iconify-icon icon="iconoir:design-pencil" class="design-pen" width="25" height="25"></iconify-icon>
                                <h5 class="prog-title1">{{$program->category}}</h5>
                            </div>
                        </div>
                    </div>
                    <p class="desc">
                        @if (strlen($program->deskripsi) >= 100)
                            {!! substr($program->deskripsi, 0, 100).'...' !!}
                        @else
                            {!! $program->deskripsi !!}
                        @endif
                    </p>
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