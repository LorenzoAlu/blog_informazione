@extends('layouts.app')


<x-header_small/>

@section('content')


<div class="container-fluid my-5 py-5">
    <div class="row justify-content-center ">
        <div class="col-10 bg-white  rounded shadow p-3">
            <h1 class="text-center p-2">{{$article->title}}</h1>
            <h2 class="text-center">{{$article->body}}</h2>
            <p class="text-center"> Categoria:
            <a href="{{ route('categories.index', $article->category_id)}}">
                {{ $article->category->name}}
            </a>   
            </p>
                <img id="img_show" class="pointer mx-auto d-block my-3 show_img  "  src="{{$article->getCover()}}" alt="">
            <p class="p-4">{{$article->body}}</p>
            <div>
                @if ($article->images!='[]')
                <h3 class="text-center">Immagini Correlate</h3>
                @foreach ($article->images as $image)
                <img id="img_show" class="pointer mx-auto d-inline my-3" width="25%" height="150px" src="{{$article->getCover()}}" alt="">
                @endforeach
                @endif               
            </div>
            <div class="d-flex justify-content-between">
                <small>Scritto da: {{$article->user->name}}</small>
                <time>Data Pubblicazione: {{$article->created_at->format('d/m/y')}}</time>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-12  text-center my-5">
            <h2 class="text-color-custom">Articoli Correlati</h2>
        </div>
            @foreach ($relatedLessFirst as $relatedLess)

            <div class="col-12 col-md-4  d-flex justify-content-center my-4">
            <x-card 
            route="{{route('articles.show',$relatedLess)}}"
            title="{{$relatedLess->title}}"
            slug="{{$relatedLess->slug}}"
            body="{{substr($relatedLess->body,0,12)}}"
            category="{{$relatedLess->category->name}}"
            date="{{$relatedLess->created_at->format('d/m/y')}}"
            
            />
            </div> 
            @endforeach
        </div>
    </div>

    
@endsection