@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('login_error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('login_error')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('tokenInvalid'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('tokenInvalid')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif