@extends('layouts.app')

<x-header_small/>

@section('content')

<div class="container">
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form action="{{route('indexRicerca')}}" method="POST" class="card card-sm">
                                    @csrf
                                <div class="card-body row no-gutters align-items-center">
                                   
                                    <div class="col-auto">
                                        <input name="searchWord" class="form-control form-control-lg form-control-borderless" type="text" placeholder="Cerca Articolo">
                                    </div>
                                    <div class="col">
                                        <label for="category_id" class="form-label">categoria</label>
                                            <select name="category_id" id="category_id" >

                                                @if ( $articlesFilter->count()==0 ){
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}" class="dropdown-item"
                                                        {{ $category->id == $request->category_id ? 'selected' : ''}}
                                                        > {{$category->name}}</option>
                                                        @endforeach
    
                                                }
                                                @else{
                                                @foreach ($categories as $category)
                                                <option value="{{$category->id}}" class="dropdown-item"
                                                    {{ $category->id == $articlesFilter->first()->category->id ? 'selected' : ''}}
                                                    > {{$category->name}}</option>
                                               
                                                @endforeach
                                                }
                                                @endif



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
                Ricerca Per Parola Chiave: {{$search}}
            </h1>
            @if ($articlesFilter->count()==0 )
            <h1 class="text-color-custom">
                Categoria: {{$categories[($request->category_id)-1]->name}}
            </h1>
            <h2>Nessun Risultato</h2>    
            @else
            <h1 class="text-color-custom">
                Categoria: {{$articlesFilter->first()->category->name}}
            </h1>
            @endif
        </div>
        @foreach ($articlesFilter as $article)

        <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
        <x-card 
        route="{{route('articles.show',$article)}}"
        title="{{$article->title}}"
        slug="{{$article->slug}}"
        body="{{$article->body}}"
        category="{{$article->category->name}}"
        date="{{$article->created_at->format('d/m/y')}}"
        />
        </div>
        @endforeach
        

    </div>
</div>




@endsection