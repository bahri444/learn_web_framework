@extends('layout.app')
@section('content')
@include('layout/pesan')
<h1>Tambah Data Todo</h1>
<form action="{{route('to_do.store')}}" method="POST">
    @csrf
    Judul : <input type="text" name="judul">
    @error('judul')
    <strong>{{$message}}</strong>
    @enderror
    <button type="submit">Save</button>
</form>
<a href="{{route('to_do.index')}}" type="submit">Kembali</a>
<!-- <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data ini')">Delete</button> -->
@endsection