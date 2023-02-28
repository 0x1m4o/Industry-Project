<style>
    a {
        text-decoration: none;
        color: #000;
    }

    a:hover {
        color: #000 !important;
    }

    div.border {
        transition: all .1s linear;
    }

    div.border:hover {
        background-color: #eeeeee; 
        transition: all .1s linear;
    }
</style>


<div class="container p-0" style="margin-top: 100px;">
    <div class="row m-0 w-full g-2">
        @forelse ($programs as $program)
        <div class="col-lg-4 col-md-6">
            <a href="">
                <div class="border rounded-3 p-3 mt-3">
                    <div class="d-flex align-items-start gap-3">
                        <img src="{{ Storage::url('public/programs/').$program->gambar }}" width="150" class="rounded">
                        <div>
                            <h4>{{$program->nama}}</h4>
                            <div class="d-flex gap-2 align-items-center">
                                <i class='bx bxs-category' style="font-size: 20px;"></i>
                                <span>{{$program->category}}</span>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">{!! substr($program->deskripsi, 0, 100) !!} ...</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('user.show', $program->id) }}" role="button" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="alert alert-danger">
            Data Program belum Tersedia.
        </div>
        @endforelse
    </div>
</div>