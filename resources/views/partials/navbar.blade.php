{{-- Code Goes Here --}}
<link rel="stylesheet" href="/css/navbar.css">

{{-- Navbar Before Login --}}
<div class="nav-wrapper sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
        <div class="container-fluid">
            <div class="d-flex justify-content-start align-items-center">
                <button class="nav-btn ham-btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <iconify-icon icon="icon-park:hamburger-button" style="color: gray;"></iconify-icon>
                </button>
                <img src="/img/itc.png" alt="Logo" width="80" height="65"
                    class="d-flex align-items-center" />

            </div>
            <div class="nav-icons">
                <button onclick="autofocus()" class="nav-btn navbar-toggler navbar-toggler-search mx-2 px-1 text-black"
                    type="button" style="width: 30px; height: 30px" id="btn-search" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearchContent" type="button" aria-expanded="false"
                    aria-controls="navbarSearchContent" aria-label="Toggle navigation">
                    <iconify-icon icon="mingcute:search-3-line"></iconify-icon>
                </button>
                <div class="dropdown">
                    <a href="/profile"> <button class="nav-btn navbar-toggler mx-2 px-1 text-black" type="button"
                            style="width: 30px; height: 30px" aria-expanded="false">
                            <img class="profile-pict profile-pict-tog" src="/img/itc.png" alt="">
                        </button>
                    </a>
                    <div class="dropdown-menu box dropdown-menu-start dropdown-menu-profile py-2">
                        <div class="drop-wrapper p-1 px-2">
                            <a class="a-tag item-drop" href="/profile">
                                <div class="item-profile py-2 go-profile">
                                    <iconify-icon class="ms-1" icon="ic:baseline-person" width="25px">
                                    </iconify-icon>
                                    <h5 class="ps-2">Profil</h5>
                                </div>
                            </a>
                            <a class="a-tag item-drop" href="/program">
                                <div class="item-profile py-2 go-program">
                                    <iconify-icon class="ms-1" icon="game-icons:graduate-cap" width="25px">
                                    </iconify-icon>
                                    <h5 class="ps-2">Program</h5>
                                </div>
                            </a>
                            <hr class="my-2" style="border: 1px solid black;">
                            <a class="a-tag item-drop" href="/logout">
                                <div class="item-profile py-2 go-logout">
                                    <iconify-icon class="ms-1" icon="ic:round-exit-to-app" rotate="180deg"
                                        width="25px">
                                    </iconify-icon>
                                    <h5 class="ps-2">Log Out</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-ham" id="navhambtn">
                <ul class="navbar-nav me-auto ms-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-1 aktif" aria-current="page" href="#">
                            <h5 class="m-0">Home</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#">
                            <h5 class="m-0">Program</h5>
                        </a>
                    </li>
                </ul>
            </div>


            <div id="navbarSearchContent" class="rounded search-form navbar-collapse navbar-collapse-search collapse">
                <form class="d-flex justify-content-center align-items-center collapse navbar-collapse" role="search">
                    <div class="input-form d-flex ">
                        <input class="form-control search-bar me-2 " type="search" placeholder="Search"
                            aria-label="Search" id="form-search">
                    </div>
                    <button class="btn btn-outline-dark btn-search box" type="submit">
                        <iconify-icon icon="mingcute:search-3-line"></iconify-icon>
                    </button>
                </form>
                <!-- Navbar Supported Content -->
                <a href="/profile">
                    <div id="navbarSupportedContent"
                        class="mx-4 d-flex justify-content-end navbar-collapse offcanvas-end d-none">
                        <div class="dropdown">
                            <a href="/profile" class="d-flex align-items-center justify-content-center a-tag"
                                role="button" aria-expanded="false">
                                <img class="profile-pict" src="/img/itc.png" alt="">
                                <h5 class="profile-title m-0 ms-2">{{ explode(' ', auth()->user()->name)[0] }}</h5>
                            </a>
                            <div class="dropdown-menu box dropdown-menu-center dropdown-menu-profile py-2">
                                <div class="drop-wrapper p-1 px-2">
                                    <a class="a-tag item-drop" href="/profile">
                                        <div class="item-profile py-2 go-profile">
                                            <iconify-icon class="ms-1" icon="ic:baseline-person" width="25px">
                                            </iconify-icon>
                                            <h5>Profil</h5>
                                        </div>
                                    </a>
                                    <a class="a-tag item-drop" href="/program">
                                        <div class="item-profile py-2 go-program">
                                            <iconify-icon class="ms-1" icon="game-icons:graduate-cap"
                                                width="25px">
                                            </iconify-icon>
                                            <h5>Program</h5>
                                        </div>
                                    </a>
                                    <hr class="my-2" style="border: 1px solid black;">
                                    <a class="a-tag item-drop" href="/logout">
                                        <div class="item-profile py-2 go-logout">
                                            <iconify-icon class="ms-1" icon="ic:round-exit-to-app" rotate="180deg"
                                                width="25px">
                                            </iconify-icon>
                                            <h5>Log Out</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </nav>
</div>

<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: rgb(103, 100, 100); width: 70%">
    <div class="container d-flex mt-2 align-items-center ms-1">
        <button class="nav-btn navbar-toggler d-inline-block" type="button" data-bs-dismiss="offcanvas">
            <iconify-icon icon="maki:cross" width="30" height="30" style="color: rgb(91, 90, 90);">
            </iconify-icon>
        </button>
        <img src="/img/itc.png" alt="Logo" width="85" height="65" class="d-inline-block " />
    </div>
    <div class="offcanvas-body">
        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffc2; background: rgb(42, 42, 42)"
            role="button" href="/login">Home</a>

        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffc2; background: rgb(42, 42, 42)"
            role="button" href="/login">Program</a>

        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffc2; background: rgb(42, 42, 42)"
            role="button" href="/login">Masuk</a>

        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffb5; background: rgb(42, 42, 42)"
            role="button" href="/register">Daftar</a>
    </div>
</div>


<!-- Auto close  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(function() {
        $("body").click(function(e) {
            if (
                e.target.getAttribute("class") === "navbar-collapse" ||
                $(e.target).parents(".navbar-collapse").length > 0
            ) {} else {
                if ($(".navbar-collapse-search").hasClass("show") == true) {
                    $(".navbar-toggler-search")[0].click();
                } else if ($(".navbar-collapse-ham").hasClass("show") == true) {
                    $(".navbar-toggler-ham")[0].click();
                }
            }
        });

    });
</script>
