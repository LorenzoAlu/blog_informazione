@extends('layouts.app')
<x-header_small/>
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12">
          <h2> Inserisci Nuovo Articolo</h2>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
          <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Sottotitolo</label>
                <input type="text" name="slug" class="form-control" id="slug">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine Articolo</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>

                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Scrivi l'articolo</label>
                <textarea name="body" id="body"  class="form-control"  cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn background-accent w-100">Invia</button>
          </form>
        </div>
    </div>
</div>
@endsection