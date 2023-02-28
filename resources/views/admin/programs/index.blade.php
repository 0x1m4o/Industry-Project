<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Program - ITC</title>
    <link rel="icon" href="/img/itc.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('program.create') }}" class="btn btn-md btn-success mb-3"><i class="bi bi-plus-circle"></i> Tambah Program</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">KATEGORI</th>
                                <th scope="col">DESKRIPSI</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($programs as $program)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/programs/').$program->gambar }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $program->nama }}</td>
                                    <td>{{ $program->category }}</td>
                                    <td>{!! $program->deskripsi !!}</td>
                                    {{-- <td>{{ $program->updated_at }}</td> --}}
                                    <td class="text-center" style="width: 100px;">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('program.destroy', $program->id) }}" method="POST">
                                            <a href="{{ route('program.edit', $program->id) }}" class="btn btn-sm btn-primary"><i class='bx bxs-edit'></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Program belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{-- {{ $programs->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>