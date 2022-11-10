@extends('layout.app')
@endsection('content')
<h1>Detail Todo</h1>
<p>Judul : {{$todo->judul}}</p>
<a href="{{route('to_do.index')}}" type="submit">Kembali</a>
@endsection