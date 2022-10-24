@extends('layout.template')
@section('body')
@section('title','Data Galery')

<h1 class="text-center  my-2">Data Galery</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emet as $vals)
            <tr>
                <td>{{$vals}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection