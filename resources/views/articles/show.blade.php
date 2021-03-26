@extends('layouts.app')


<x-header_small />

@section('content')


    <div class="container-fluid my-5 py-5">
        <div class="row justify-content-center ">
            <div class="col-10 bg-white  rounded shadow p-3">
                <h1 class="text-center p-2">{{ $article->title }}</h1>
                <h2 class="text-center">{{ $article->body }}</h2>
                <p class="text-center"> Categoria:
                    <a href="{{ route('categories.index', $article->category_id) }}">
                        {{ $article->category->name }}
                    </a>
                </p>
                <img id="img_show" class="pointer mx-auto d-block my-3 show_img  " src="{{ $article->getCover() }}"
                    alt="">
                <p class="p-4">{{ $article->body }}</p>
                <div>
                    @if ($article->images != '[]')
                        <h3 class="text-center">Immagini Correlate</h3>
                        @foreach ($article->images as $image)
                            <img id="img_show" class="pointer mx-auto d-inline my-3" width="25%" height="150px"
                                src="{{ $article->getCover() }}" alt="">
                        @endforeach
                    @endif
                </div>
                <div class="my-3">
                    <strong>Tags: </strong>
                    @foreach ($article->tags as $tag)
                        <small>#{{ $tag->name }} </small>
                    @endforeach
                </div>
                <div class="d-flex justify-content-between">
                    <small>Scritto da: {{ $article->user->name }}</small>
                    <time>Data Pubblicazione: {{ $article->created_at->format('d/m/y') }}</time>
                </div>

            </div>
        </div>
    </div>

    {{-- commenti inseriti --}}
    <div class="container-fluid">
        <div class="row justify-content-center ">
            @if (count($article->comments) == 0)

            @else
            <div class="col-12 text-center">
                <h2>Commenti</h2>
            </div>
                @foreach ($article->comments as $comment)
                    <div class="col-12 col-md-10 bg-white shadow rounded-3 my-3 p-5">
                        <div id="commentWrapper" class="d-block">
                            <p>{{ $comment->body }}</p>
                        </div>
                        <div id="commentWrapperNew" class="d-none">
                            <form action="{{ route('comments.update', $comment) }}" method="POST">
                                @csrf
                                <div>
                                    <label class="form-label my-3" for="comment">Modifica commenta</label>
                                    <textarea class="form-control" name="body" id="comment" cols="20" rows="5">{{ $comment->body }}
                                    </textarea>
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn background-accent w-100">Modifica</button>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small>Commento di:{{ $comment->user->name }}</small>
                            <small>Creato il :{{ $comment->created_at->format('d/m/Y') }}</small>
                        </div>
                        @if($comment->user->id==Auth::id()) 
                        <div class="my-3 d-flex justify-content-between">
                            <button id="ModifyComment" class="btn background-accent">
                                Modifica
                            </button>
                        @endif
                        @if($comment->user->id==Auth::id() || Auth::user()->isAdmin())
                            <form action="{{route('comments.destroy',$comment)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn bg-danger">
                                Elimina
                             </button>
                            </form>
                        </div>
                        @endif
                    </div>
                @endforeach
            @endif

        </div>
    </div>

    {{-- sezione commenti --}}
    @if (session('message'))
        <div class="alert alert-success ">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid my-3">
        <div class="row justify-content-center ">
            <div class="col-12 text-center my-4">
                <h2>Commenta Notizia</h2>
            </div>
            <div class="col-12 col-md-8 bg-white shadow-lg rounded-3">
                <form action="{{ route('comments.store', $article) }}" method="POST">
                    @csrf
                    <div>
                        <label class="form-label my-3" for="comment">Commenta</label>
                        <textarea class="form-control" name="body" id="comment" cols="30" rows="10"></textarea>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn background-accent w-100">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{-- articoli correlati  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12  text-center my-5">
                <h2 class="text-color-custom">Articoli Correlati</h2>
            </div>
            @foreach ($relatedLessFalse as $article)

                <div class="col-12 col-md-4  d-flex justify-content-center my-4">
                    <x-card route="{{ route('articles.show', $article) }}" title="{{ $article->title }}"
                        slug="{{ $article->slug }}" body="{{ $article->body }}"
                        category="{{ $article->category->name }}"
                        date="{{ $article->created_at->format('d/m/y') }}" />
                </div>
            @endforeach
        </div>
    </div>


@endsection
