@extends('layouts.app')


<x-header_small/>

@section('content')


<div class="container-fluid my-5 py-5">
    <div class="row justify-content-center ">
        <div class="col-10 bg-white  rounded shadow p-3">
            <h1 class="text-center">{{$filtro['titolo']}}</h1>
            <h2>{{$filtro['sottotitolo']}}</h2>
            <a href="{{ route('articoli.categoria',['categoria'=>$filtro['categoria']])}}">
                <p>  {{ $filtro['categoria'] }}</p>
            </a>
            <img class="mx-auto d-block " width="100%" height="200px" src="https://picsum.photos/600/200
            " alt="">
            <p>{{$filtro['body']}}</p>
            <p>{{$filtro['data']}}</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12  text-center my-5">
            <h2 class="text-color-custom">Articoli Correlati</h2>
        </div>
            @foreach ($correlati as $correlato)

            <div class="col-12 col-md-4  d-flex justify-content-center my-4">
            <x-card 
            titolo="{{$correlato['titolo']}}"
            sottotitolo="{{$correlato['sottotitolo']}}"
            categoria="{{$correlato['categoria']}}"
            body="{{$correlato['body']}}"
            data="{{$correlato['data']}}"
            
            />
            </div>
            @endforeach
        </div>
    </div>

    
@endsection