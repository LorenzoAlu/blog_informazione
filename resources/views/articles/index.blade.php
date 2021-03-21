@extends('layouts.app')

<x-header_small/>

@section('content')

<div class="container-fluid ">
    <div class="row ">
        <div class="col-12 text-center my-5 ">
            <h1 class="text-color-custom">
                Tutti Gli Articoli
            </h1>
        </div>
        @foreach ($articles as $article)

        <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
        <x-card 
        route="{{route('articles.show',$article)}}"
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