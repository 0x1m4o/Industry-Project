@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="css/profil.css">
<div class="container my-5 pro">

    <div class="edit-pro">

        <div class="edit">
            <iconify-icon icon="mdi:pen" class="pen" width="25" height="25"></iconify-icon>
            <h4>Edit Profile</h4>
        </div>

    </div>

    <div class="box-pro">
        <iconify-icon icon="carbon:user-avatar-filled" class="ava" width="200" height="200"></iconify-icon>

        <div class="desc-pro">

            <h1>Badzlan Nur Dhabith</h1>

            <div class="d-flex d">
                <iconify-icon icon="mdi:email" class="d-icon" width="20" height="20"></iconify-icon>
                <h4>badzlan@gmail.com</h4>
            </div>

            <div class="d-flex d">
                <iconify-icon icon="mdi:telephone" class="d-icon" width="20" height="20"></iconify-icon>
                <h4>123456789012</h4>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1>Program Yang Saya Ikuti</h1>

    <div class="card" style="width: 20rem;">
        <div class="d-flex">
            <img src="img/design.jpg" class="card-img-top img-card" alt="...">
            <div>
                <h4 class="prog-title">UI/UX Developer</h4>

                <div class="d-flex justify-content-center">
                    <iconify-icon icon="iconoir:design-pencil" class="design-pen" width="25" height="25"></iconify-icon>
                    <h5 class="prog-title">Design</h5>
                </div>

            </div>
        </div>
        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, molestias voluptatum labore quae omnis ab consequatur unde fuga eum?.</p>
    </div>
</div>



</div>
@endsection