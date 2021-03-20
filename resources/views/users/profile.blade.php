@extends('layouts.app')
<x-header_small/>
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12">
          <h2> Il Tuo Profilo</h2>
          <ul>
              <li>Nome : {{$user->name}}</li>
              <li>Email : {{$user->email}}</li>
              <li>Iscritto Dal: {{$user->created_at->format('d/m/y')}}</li>
          </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12">
          <h2> I Tuoi Articoli</h2>
        </div>
                @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-12 table-responsive">
            <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Sottotitolo</th>
                    <th scope="col">Pubblicato Il</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($user->articles->reverse() as $article)
                    <tr>
                      <th scope="row">{{$article->title}}</th>
                      <td>{{$article->slug}}</td>
                      <td>{{$article->created_at->format('d/m/y')}}</td>
                      <td>
                        <a class="btn background-accent" href="{{route('articles.edit',$article)}}">Modifica</a>
                     
                      </td>
                      <td>
                        <form action="{{route('articles.destroy',$article)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button  class="btn btn-danger" type="submit">Elimina</button>                      
                        </form>
                      </td>

                    </tr>  
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection