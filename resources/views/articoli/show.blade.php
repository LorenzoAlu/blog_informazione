@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>{{$filtro['titolo']}}</h1>
            <h2>{{$filtro['sottotitolo']}}</h2>
            <h3>{{$filtro['categoria']}}</h3>
            <p>{{$filtro['body']}}</p>
        </div>
    </div>
</div>

<div class="container-flui">
    <div class="row">
        <div class="col-12">
            <h2>Articoli Correlati</h2>
        </div>
            @foreach ($correlati as $correlato)

            <div class="col-4">
            <x-card 
            titolo="{{$correlato['titolo']}}"
            sottotitolo="{{$correlato['sottotitolo']}}"
            categoria="{{$correlato['categoria']}}"
            body="{{$correlato['body']}}"
            />
            </div>
            @endforeach
        </div>
    </div>

    
@endsection