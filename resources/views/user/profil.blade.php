@extends('layouts.main')

<link rel="stylesheet" href="/css/profil.css">
<style>
    .psi {
        text-decoration: none !important;
        color: #000 !important;
    }

    .psi:hover {
        color: #187BCD !important;
    }
</style>


@section('content')

@include('partials.messages')
<div class="container p-0">
    <div class="row gy-4 justify-content-evenly align-items-center py-5">
        <div class="col-lg-3 col-md-5 order-2 order-md-1 text-center">
            <img src="{{ auth()->user()->avatar }}" style="width:200px; height:200px;">
        </div>
        <div class="col-lg-8 col-md-6 order-3 order-md-2">
            <h1>{{ auth()->user()->name }}</h1>
            <div class="d-flex">
                <iconify-icon icon="mdi:email" class="d-icon" width="20" height="20"></iconify-icon>
                <h5>{{ auth()->user()->email }}</h5>
            </div>
            <div class="d-flex">
                <iconify-icon icon="mdi:telephone" class="d-icon" width="20" height="20"></iconify-icon>
                <h5>{{ auth()->user()->no_hp }}</h5>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 align-self-start text-end order-1 order-md-3">
            <iconify-icon icon="mdi:pen" class="pen" width="25" height="25" data-bs-toggle="modal" data-bs-target="#edit" style="cursor: pointer;"></iconify-icon>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="">
            @csrf
            <div class="modal-body">
            <div class="mb-3">
                <label for="formFile" class="form-label">Avatar (Upload Gambar dengan rasio 1 : 1)</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="input mb-3 form-control" placeholder="Vanessa Oey" value="{{ auth()->user()->name }}" required autofocus>
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="input mb-3 form-control" placeholder="vanessaoey@example.com" value="{{ auth()->user()->email }}" required>
            <label for="no_hp" class="form-label">Nomor Telepon</label>
            <input type="text" id="no_hp" name="no_hp" class="input mb-3 form-control" placeholder="08267891276" value="{{ auth()->user()->no_hp }}" required>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="mb-4">Program Yang Saya Ikuti</h1>
    <div class="row m-0 g-3">
        @forelse ($myprograms as $myprogram)
        <div class="col-lg-4 col-md-6">
            <a class="psi" href={{ route('user.show', ['id'=>$myprogram->program_id]) }}>
                <div class="card w-full">
                    <div class="d-flex align-items-start">
                        <img src="{{ Storage::url('public/programs/').$myprogram->image }}" class="card-img-top img-card rounded" style="width: 200px; height: 100px; object-fit: cover;">
                        <div class="my-1 w-100 ms-2">
                            <h4 class="mt-1">{{ $myprogram->title }}</h4>
                            <div class="d-flex justify-content-start mt-1">
                                <iconify-icon icon="iconoir:design-pencil" class="design-pen" width="25" height="25"></iconify-icon>
                                <h5 class="prog-title1">{{ $myprogram->category }}</h5>
                            </div>
                        </div>
                    </div>
                    <p class="desc">{!! substr($myprogram->description, 0, 100) !!}</p>
                </div>
            </a>
        </div>
        @empty
        <div class="alert alert-danger">
            Belum mendaftar pada program.
        </div>
        @endforelse
    </div>
</div>
@endsection