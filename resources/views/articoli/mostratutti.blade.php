@extends('layouts.app')

<x-header_small/>

@section('content')

<div class="container-fluid ">
    <div class="row ">
        <div class="col-12 text-center my-3 ">
            <h1>
                Tutti Gli Articoli
            </h1>
        </div>

        @foreach ($articoli as $articolo)

        <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
        <x-card 
        titolo="{{$articolo['titolo']}}"
        sottotitolo="{{$articolo['sottotitolo']}}"
        categoria="{{$articolo['categoria']}}"
        body="{{$articolo['body']}}"
        data="{{$articolo['data']}}"
        />
        </div>
        @endforeach
        

    </div>
</div>




@endsection