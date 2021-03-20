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
        title="{{$article->title}}"
        slug="{{$article->slug}}"
        {{-- body="{{substr($article->body,0,10)}}" --}}
       
        />
        </div>
        @endforeach
        

    </div>
</div>




@endsection