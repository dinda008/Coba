@extends('layouts.app')

@section('content')
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Halaman Home</h1>
                <p class="lead">Halaman ini merupakan halaman Home</p>
            </div>
        <p>Name : {{$name}}</p>
        <p>Mata pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{$p}}</li>
            @endforeach
        </ul>
        </div>
    @endsection


