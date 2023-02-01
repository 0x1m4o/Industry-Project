{{-- Code Goes Here --}}
{{-- Navbar After Login --}}
<link rel="stylesheet" href="/css/navbar.css">

<style>
    .detail {
        color: #49516F;
        text-decoration: none #9FA6B2;
    }

    .detail:hover {
        text-decoration: underline #9FA6B2;
        transition: 0.2s ease-out;
        cursor: pointer;
        font-size: 16.5px;

    }

    input[type="search"]::-webkit-search-cancel-button {
        /* Remove default */
        -webkit-appearance: none;
        appearance: none;
        height: 13px;
        width: 13px;
        padding: 6px;
        cursor: pointer;
        background: url('https://api.iconify.design/ph/x-bold.svg?color=%23237a57') no-repeat center center / contain;
    }
</style>

<div class="nav-wrapper">
    <div class="container-fluid p-0">
        <div class=" d-flex justify-content-between align-items-center" style="height: 35px; background: #EDEEF7">
            <div class="d-flex justify-content-start align-items-center ">
                <a href="/feed" class="a-tag text-decoration-none">
                    <p class="mx-3 top-nav title-hover">Feed</p>
                </a>
                <a href="/checklist" class="a-tag text-decoration-none">
                    <p class="me-3 top-nav title-hover">Checklist</p>
                </a>
                <a href="/rab" class="a-tag text-decoration-none">
                    <p class="me-3 top-nav title-hover">RAB</p>
                </a>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <a href="/vendor/login" class="a-tag text-decoration-none">
                    <p class="me-4 top-nav title-hover">Mulai Jualan</p>

                </a>
                <a href="#" class="a-tag text-decoration-none">
                    <p class="me-4 top-nav title-hover">Mitra Maritory</p>
                </a>
                <a href="#" class="a-tag text-decoration-none">
                    <p class="mx-3 top-nav title-hover">Tentang Maritory</p>

                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-main navbar-expand-lg d-flex align-items-center p-2">
        <div class="container-fluid">
            <!-- Offcanvas -->
            <div class="d-flex justify-content-start">
                <button class="nav-btn ham-btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <span class="fas fa-solid fa-bars"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img src="/img/logos.png" alt="Logo" width="200" height="75"
                        class="d-flex align-items-center" />
                </a>
            </div>

            <!-- Navbar Search Content -->

            <div id="navbarSearchContent" class="rounded me-4 navbar-collapse collapse container-fluid">
                <div class="item-content d-flex justify-content-between align-items-center mx-3 bg-white rounded w-100"
                    style="height: 50px">
                    <button class="navbar-toggler" type="button" data-bs-target="#navbarSearchContent"
                        data-bs-toggle="collapse">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <form class="d-flex nav-item search-form" role="search">
                        <input class="search-bar ms-3 w-100" type="search" placeholder="Cari Vendor atau Lokasi..."
                            aria-label="Search" />
                    </form>

                    <div class="dropdown">
                        <button class="btn pt-2" data-bs-auto-close="outside" href="#"
                            role="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-calendar3 fs-4"></i>
                        </button>

                        <div class="dropdown-menu dropdown-not-hover box-shadow dropdown-menu-center wrapper"
                            style="margin: 0 0 0 15px">
                            <div class="calendar-js calendar-container"></div>
                        </div>
                    </div>

                    <button class="btn text-light shadow-btn-sm m-2 navbar-collapse d-none" style="background: #fdb662"
                        type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <!-- Navbar Supported Content -->
            <div id="navbarSupportedContent"
                class="mx-4 d-flex justify-content-end navbar-collapse offcanvas-end d-none">
                <a class="btn btn-light border-0 shadow-btn mx-3"
                    style="color: #fdb662; background: white; height:50px; width:105px; line-height:35px;"
                    role="button" href="/login">Masuk</a>

                <a class="btn btn-light border-0 shadow-btn mx-1"
                    style="background: #fdb662; color: white; height:50px; width:105px; line-height:35px;"
                    role="button" href="/signup">Daftar</a>
            </div>

        </div>
        <!-- Navbar Icons -->
        <div class="nav-icons d-flex align-items-center">
            <button class="nav-btn navbar-toggler navbar-toggler-search text-white" style="width: 30px; height: 30px"
                id="btn-search" data-bs-toggle="collapse" data-bs-target="#navbarSearchContent" type="button"
                aria-expanded="false" aria-controls="navbarSearchContent" aria-label="Toggle navigation">
                <iconify-icon icon="mingcute:search-3-line"></iconify-icon>
            </button>

            <button class="nav-btn tabungan-btn navbar-toggler text-white" style="width: 30px; height: 30px">
                <iconify-icon icon="mingcute:wallet-4-fill"></iconify-icon>
            </button>
            <button class="nav-btn keranjang-btn navbar-toggler text-white" style="width: 30px; height: 30px">
                <iconify-icon icon="carbon:shopping-cart"></iconify-icon>
            </button>
            <button class="nav-btn chat-btn navbar-toggler text-white" style="width: 30px; height: 30px">
                <iconify-icon icon="material-symbols:mail-rounded"></iconify-icon>
            </button>
            <div class="dropdown dropdown-hover ">
                <button class="nav-btn navbar-toggler">
                    <img src="/img/profile.png" class="rounded-circle" style="width: 30px; height: 30px" />
                </button>
                <div class="dropdown-menu box-shadow dropdown-menu-start">
                    <div class="container container-profile">

                        <section class="profile">
                            <a href="/profile">
                                <div class="profile-image">
                                    <img src="/img/profile.png" />
                                </div>
                            </a>
                            <div class="profile-name">
                                <a href="/profile">Vanessa Oey</a>
                            </div>
                        </section>
                        <section class="dashboard">
                            <div class="dashboard-title">
                                <a href="">
                                    <p><i class="bi bi-wallet"></i> Maripay</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-star"></i> Goal</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-check-square"></i> Checklist</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-images"></i> Feed</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-people-fill"></i> Following</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-gear"></i> Setting</p>
                                </a>
                            </div>
                            <div class="dashboard-data">
                                <p>Rp 60,000,000</p>
                                <p>Rp -40,000,000</p>
                            </div>
                        </section>
                        <section class="kotak-masuk">
                            <i class="bi bi-envelope"></i>
                            <span>Kotak Masuk</span>
                        </section>
                        <section class="contact">
                            <div class="contact-title">
                                <a href="">
                                    <p><i class="bi bi-chat"></i> Chat</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-journal-text"></i> Ulasan</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-bell"></i> Notification</p>
                                </a>
                                <a href="">
                                    <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                                </a>
                                <a href="">
                                    <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                                </a>
                            </div>
                            <div class="contact-data">
                                <p>5</p>
                                <p>1</p>
                                <p>10</p>
                                <p>2</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: rgb(103, 100, 100); width: 70%">
    <div class="container d-flex mt-2 align-items-center ms-1">
        <button class="nav-btn navbar-toggler d-inline-block ms-2 mb-1" type="button" data-bs-dismiss="offcanvas">
            <span class="fas fa-solid fa-bars"></span>
        </button>
        <img src="./img/logos.png" alt="Logo" width="150" height="55" class="d-inline-block ms-2" />
    </div>
    <div class="offcanvas-body">
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
                if ($(".navbar-collapse").hasClass("show") == true) {
                    $(".navbar-toggler-search")[0].click();
                }
            }
        });
    });
</script>
