@extends('layouts.app')

<x-header/>

@section('content')

<div class="container-fluid">
  <div class="row ">
    <div class="col-12 text-center mb-5"><h2>Ultime Notizie</h2></div>
@foreach ($ultimi as $ultimo)

<div class="col-4 d-flex justify-content-center">
<x-card 
titolo="{{$ultimo['titolo']}}"
sottotitolo="{{$ultimo['sottotitolo']}}"
categoria="{{$ultimo['categoria']}}"
body="{{$ultimo['body']}}"
data="{{$ultimo['data']}}"
/>
</div>
@endforeach

  </div>
</div>




<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="text-center">Dicci cosa ne pensi</h2>
      </div>
        <div class="col-md-8">
            <form method="POST" action="{{route('contacts.send')}}">
                @csrf
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                @error('nome')
                <div class="alert">{{$message}}</div>    
                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Inserisci E-mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <label for="messaggio">Messaggio</label>
                <textarea class="form-control" name="messaggio" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-warning w-100">Inviaci le tue notizie</button>
              </form>   

        </div>
    </div>
</div>

@endsection
