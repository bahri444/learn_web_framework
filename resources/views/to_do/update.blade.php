@extends('layout.app')
@section('content')
@include('layout/pesan')
<h1>Update Data Todo</h1>
<form action="{{route('to_do.store')}}" method="POST">
    @csrf
    @method('put')
    Judul : <input type="text" name="judul" value="{{$todo->judul}}">
    @error('judul')
    <strong>{{$message}}</strong>
    @enderror
    <button type="submit">Update</button>
</form>
<a href="{{route('to_do.index')}}">Kembali</a>
<!-- <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data ini')">Delete</button> -->
@endsection