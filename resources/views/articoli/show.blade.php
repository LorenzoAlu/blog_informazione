@extends('layouts.app')


<x-header_small/>

@section('content')


<div class="container-fluid my-5 py-5">
    <div class="row">
        <div class="col-12 ">
            <h1>{{$filtro['titolo']}}</h1>
            <h2>{{$filtro['sottotitolo']}}</h2>
            <h3>{{$filtro['categoria']}}</h3>
            <p>{{$filtro['body']}}</p>
            <p>{{$filtro['data']}}</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12  text-center my-5">
            <h2>Articoli Correlati</h2>
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