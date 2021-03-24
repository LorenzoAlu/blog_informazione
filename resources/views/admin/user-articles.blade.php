@extends('layouts.app')
<x-header_small/>
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center my-5">
        <div class="col-12">
            <h2>Articoli Utente:</h2>
        </div>
        @if (count($articles)==0)
            <h3>L'utente non ha pubblicato ancora Articoli</h3>
        @else
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato Il</th>
                    <th scope="col">Elimina</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                      <th scope="row">{{$article->title}}</th>
                      <td>{{$article->slug}}</td>
                      <td>{{$article->created_at->format('d/m/Y')}}</td>
                      <td>
                            <a href="" class="btn btn-danger">Elimina</a>

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