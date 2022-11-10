@extends('layout.app')
@section('content')
<h1>Data Todo</h1>
@include('layout/pesan')
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th><a href="{{route('to_do.create')}}">Tambah Data</a></th>
        </tr>
    </thead>
    @php $no=1; @endphp
    @foreach($to_do as $data)
    <tbody>
        <tr>
            <td>{{$no++}}</td>
            <td><a href="{{route('to_do.show',$data->id)}}">{{$data->judul}}</a></td>
            <td>
                <form action="{{route('to_do.destroy',$data->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('to_do.update',$data->judul)}}">Update</a>
                    <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data ini')">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection