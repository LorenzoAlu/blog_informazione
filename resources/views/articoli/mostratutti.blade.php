@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>
                Tutti Gli Articoli
            </h1>
        </div>

        @foreach ($articoli as $articolo)

        <div class="col-4">
        <x-card 
        titolo="{{$articolo['titolo']}}"
        sottotitolo="{{$articolo['sottotitolo']}}"
        categoria="{{$articolo['categoria']}}"
        body="{{$articolo['body']}}"
        />
        </div>
        @endforeach
        

    </div>
</div>




@endsection