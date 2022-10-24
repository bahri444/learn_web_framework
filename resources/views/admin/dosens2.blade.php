@extends('layout.template')
@section('body')
@section('title','Data Dosen')
<h1 class="text-center  my-2">Data Dosen</h1>
<!--my adalah margin untuk semua sisi-->
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens2 as $vals)
            <tr>
                <td>{{$vals}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection