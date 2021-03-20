@extends('layouts.app')

<x-header_small/>
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5 text-center">
            <h1 class="text-color-custom">Articoli per Categoria</h1>
            {{-- <p>Sezione:  {{$filtro=>$filtrato['categoria']}} </p> --}}
        </div>
        @foreach ($articles as $article)

        <div class="col-md-4 col-12 d-flex justify-content-center my-4">
        <x-card 
        route="{{route('articles.index',$article)}}"
        title="{{$article->title}}"
        slug="{{$article->slug}}"
        body="{{substr($article->body,0,12)}}"
        category="{{$article->category->name}}"
        date="{{$article->created_at->format('d/m/y')}}"
        />
        </div>
        @endforeach
    </div>
</div>





    
@endsection