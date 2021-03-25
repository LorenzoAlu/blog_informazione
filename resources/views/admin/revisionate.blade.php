@extends('layouts.app')
<x-header_small />
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            @if (session('message'))
                <div class="alert alert-success ">
                    {{ session('message') }}
                </div>
            @endif
                <div class="col-12">
                    <h2>Articoli da revisionare</h2>
                </div>
                @if (count($newArticles) == 0)
                    <h3>Non ci sono articoli da revisionare</h3>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Titolo</th>
                                    <th scope="col">Autore</th>
                                    <th scope="col">Creato Il</th>
                                    <th scope="col">Approva</th>
                                    <th scope="col">Elimina</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newArticles as $article)
                                    <tr>
                                        <th scope="row"><a class="text-dark"
                                                href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                                        </th>
                                        <td>{{ $article->user->name }}</td>
                                        <td>{{ $article->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('articles.approved', $article) }}"
                                                class="btn btn-primary">Approva</a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('articles.destroy', $article) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Elimina</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
        </div>
    </div>

@endsection
