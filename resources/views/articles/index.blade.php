@extends('layouts.app')

<x-header_small />

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form action="{{ route('indexRicerca') }}" method="POST" class="card card-sm">
                    @csrf
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col">
                            <input name="searchWord" class="form-control form-control-lg form-control-borderless"
                                type="text" placeholder="Cerca Articolo">
                        </div>
                        <div class="col">
                            <label for="category" class="form-label">Categoria</label>

                            <select name="category_id" id="category_id">
                                <option value="0">Tutte le categorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-lg background-accent text-white" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
            <!--end of col-->
        </div>
    </div>


    <div class="container-fluid ">
        <div class="row ">
            <div class="col-12 text-center my-5 ">
                <h1 class="text-color-custom">
                    Tutti Gli Articoli
                </h1>
            </div>
            @if (count($articles) == 0)

                <h2 class="text-center">Nessun Risultato
                </h2>
            @else
                @foreach ($articles as $article)
                    <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                        <x-card route="{{ route('articles.show', $article) }}" title="{{ $article->title }}"
                            slug="{{ $article->slug }}" body="{{ $article->body }}"
                            category="{{ $article->category->name }}"
                            date="{{ $article->created_at->format('d/m/y') }}" />
                    </div>
                @endforeach
                {{-- {{ $articles->links() }} --}}
            @endif


        </div>
    </div>




@endsection
