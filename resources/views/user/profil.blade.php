@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="css/profil.css">
<div class="pro">

    <div class="edit-pro">

        <div class="edit">
            <iconify-icon icon="mdi:pen" class="pen" width="25" height="25"></iconify-icon>
            <h4>Edit Profile</h4>
        </div>

    </div>

    <div class="box-pro">
        <img src="{{ auth()->user()->avatar }}" alt="" style="width:200px; height:200px;">

        <div class="desc-pro">

            <h1>{{ auth()->user()->name }}</h1>

            <div class="d-flex d">
                <iconify-icon icon="mdi:email" class="d-icon" width="20" height="20"></iconify-icon>
                <h4>{{ auth()->user()->email }}</h4>
            </div>

            <div class="d-flex d">
                <iconify-icon icon="mdi:telephone" class="d-icon" width="20" height="20"></iconify-icon>
                <h4  id="program">{{ auth()->user()->no_hp }}</h4>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="mb-4">Program Yang Saya Ikuti</h1>

    @forelse ($myprograms as $myprogram)
    <div class="col-lg-4 col-md-6">
        <a href={{ route('user.show', ['id'=>$myprogram->program_id]) }}>
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
        Belum mendaftar pada suatu program.
    </div>
    @endforelse

</div>



</div>
@endsection