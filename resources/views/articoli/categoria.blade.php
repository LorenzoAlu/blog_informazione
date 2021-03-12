@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Tutti gli articoli di quella categoria</h1>
        </div>
        @foreach ($articoli as $categoria)

        <div class="col-4">
        <x-card 
        titolo="{{$categoria['titolo']}}"
        sottotitolo="{{$categoria['sottotitolo']}}"
        categoria="{{$categoria['categoria']}}"
        body="{{$categoria['body']}}"
        />
        </div>
        @endforeach
    </div>
</div>





    
@endsection