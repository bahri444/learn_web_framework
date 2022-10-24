@extends('layout.template')
@section('body')
@section('title','Data Mahasiswa')
<h1 class="text-center my-2">Data Mahasiswa</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $vals)
            <tr>
                <td>{{$vals}}</td>
            </tr>
            @empty
            <div class="alert alert-danger dinline-block">Data Tidak ada..!</div>
            @endforelse
        </tbody>
    </table>
</div>

@endsection