@extends('layouts.app')
<x-header_small/>
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12">
          <h2> Modifica Articolo</h2>
          <form method="POST" action="{{route('articles.update',$article)}}" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label" >Sottotitolo</label>
                <input type="text" name="slug" class="form-control" id="slug" value="{{$article->slug}}">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine Articolo</label>
                <input type="file" name="img[]" class="form-control" id="img" multiple>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                    
                    <select class="form-select" name="category_id" id="category_id" >
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" 
                            {{ $category->id == $article->category->id ? 'selected' : '' }}
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>

            </div>
            <div class="mb-3">
                <label for="tag" class="form-label">tags</label>

            
                <select  class="form-select" name="tag[]" id="tag" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" 
                        {{ $article->tags->contains($tag) ? 'selected' : '' }}
                        >{{ $tag->name }}</option>                 
                           @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Scrivi l'articolo</label>
                <textarea name="body" id="body"  class="form-control"  cols="30" rows="10">{{$article->body}}</textarea>
            </div>
            
            <button type="submit" class="btn background-accent w-100">Invia</button>
          </form>
        </div>
    </div>
</div>
@endsection