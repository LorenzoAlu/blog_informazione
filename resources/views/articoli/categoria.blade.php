@extends('layouts.app')

<x-header_small/>
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5 text-center">
            <h1 class="text-color-custom">Articoli per Categoria</h1> --}}
            {{-- <p>Sezione:  {{$filtro=>$filtrato['categoria']}} </p> --}}
        </div>
        @foreach ($articles as $article)

        <div class="col-md-4 col-12 d-flex justify-content-center my-4">
        <x-card 
        titolo="{{{$title}}}"
        sottotitolo="{{$slug}}"
        
        body="{{$body}}"
       
        />
        </div>
        @endforeach
    </div>
</div>





    
@endsection