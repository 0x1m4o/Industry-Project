@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <h3 class="mb-4">Program</h3>
    <a role="button" href="admin/create" class="btn btn-primary">Buat Program</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Program</th>
          <th>Tanggal Dibuat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($program as $data)
            <tr>
                {{-- <a href="/program/{{$data->slug}}">{{$data->nama}}</a> --}}
                {{-- <p><i class='bx bxs-category'></i> {{$data->category}}</p> --}}
                {{-- <h4>{{$data->deskripsi}}</h4> --}}
            <td>{{$data->nama}}</td>
            <td>{{$data->created_at}}</td>
            <td>
                <button class="btn btn-primary">Lihat</button>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-primary">Hapus</button>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection