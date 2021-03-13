@extends('layouts.app')

<x-header_small/>
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5 text-center">
            <h1 class="text-color-custom">Articoli per Categoria</h1>
            {{-- <p>Sezione:  {{$filtro=>$filtrato['categoria']}} </p> --}}
        </div>
        @foreach ($filtro as $categoria)

        <div class="col-md-4 col-12 d-flex justify-content-center my-4">
        <x-card 
        titolo="{{$categoria['titolo']}}"
        sottotitolo="{{$categoria['sottotitolo']}}"
        categoria="{{$categoria['categoria']}}"
        body="{{$categoria['body']}}"
        data="{{$categoria['data']}}"
        />
        </div>
        @endforeach
    </div>
</div>





    
@endsection