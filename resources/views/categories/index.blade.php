@extends('layouts.app')

@section('content')
    <x-header_small />

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1 class="text-color-custom">Articoli per Categoria: {{ $category->name }}</h1>
            </div>
            @foreach ($articles as $article)
                <div class="col-md-4 col-12 d-flex justify-content-center my-4">
                    <x-card route="{{ route('articles.show', $article) }}" title="{{ $article->title }}"
                        slug="{{ $article->slug }}" body="{{ $article->body }}" category="{{ $article->category->name }}"
                        date="{{ $article->created_at->format('d/m/y') }}" />
                </div>
            @endforeach
        </div>
    </div>






@endsection
