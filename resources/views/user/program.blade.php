@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="/css/profil.css">
<style>
    a {
        text-decoration: none;
        color: #000;
    }

    .card-program:hover {
        color: #f4f4f4 !important;
    }

    div.border {
        transition: Semua .1s linear;
    }

    div.border:hover {
        background-color: #eeeeee;
        transition: Semua .1s linear;
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
    <div class="row m-0 g-3 mb-5">
        <div class="d-flex justify-content-end mb-2">
            <select class="form-select" style="width: 200px;" name="category" id="category">
                <option value="Semua">Semua</option>
                <option value="Programming" {{ request('category') === 'Programming' ? 'selected' : '' }}>Programming</option>
                <option value="Design" {{ request('category') === 'Design' ? 'selected' : '' }}>Design</option>
                <option value="Networking" {{ request('category') === 'Networking' ? 'selected' : '' }}>Networking</option>
            </select>
        </div>
        @forelse ($programs as $program)
        <div class="col-lg-4 col-md-6">
            <a href={{ route('user.show', ['id'=>$program->id]) }}>
                <div class="card w-full">
                    <div class="d-flex align-items-start">
                        <img src="{{ Storage::url('public/programs/').$program->gambar }}" class="card-img-top img-card rounded" style="width: 200px; height: 100px; object-fit: cover;">
                        <div class="my-1 w-100 ms-2">
                            <h4 class="mt-1">
                                @if (strlen($program->nama) >= 20)
                                {!! substr($program->nama, 0, 20 ).'...' !!}
                                @else
                                {!! $program->nama !!}
                                @endif
                            </h4>
                            <div class="d-flex justify-content-start align-items-center mt-1">
                                {{-- <iconify-icon icon="iconoir:design-pencil" class="design-pen" width="25" height="25"></iconify-icon> --}}
                                <i class='bx bxs-category' style="font-size: 20px;"></i>
                                <h5 class="prog-title1 m-0 ms-2">{{$program->category}}</h5>
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
    {{-- <button class="btn btn-lg btn-primary shadow-btn rounded-pill d-block mx-auto my-5" style="background-color: #187BCD">
        Muat Lebih Banyak
    </button> --}}
</div>

<script>
    const category = document.querySelector('#category');
    category.addEventListener('change', (e) => {
        if (e.target.value === 'Semua') {
            window.location.replace("/program");
        } else {
            window.location.replace(`/program?category=${e.target.value}`);
        }
    })
</script>
@endsection