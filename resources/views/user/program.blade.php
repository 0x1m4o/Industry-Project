@extends('layouts.main')

@section('content')
{{-- JANGAN DIHAPUS GAES --}}
    {{-- @foreach ($program as $data) --}}
        {{-- <a href="/program/{{$data->slug}}">{{$data->nama}}</a> --}}
        {{-- <p><i class='bx bxs-category'></i> {{$data->category}}</p> --}}
        {{-- <h4>{{$data->deskripsi}}</h4> --}}
    {{-- @endforeach --}}

{{-- Program --}}
{{-- Isi Di bawah ini --}}
    @include('partials.program')
@endsection