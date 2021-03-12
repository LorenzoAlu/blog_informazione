@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <h2>Ultime Notizie</h2>
@foreach ($ultimi as $ultimo)

<div class="col-4">
<x-card 
titolo="{{$ultimo['titolo']}}"
sottotitolo="{{$ultimo['sottotitolo']}}"
categoria="{{$ultimo['categoria']}}"
body="{{$ultimo['body']}}"
/>
</div>
@endforeach

  </div>
</div>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{route('contacts.send')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Inserisci E-mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                @error('nome')
                <div class="alert">{{$message}}</div>    
                @enderror
                </div>
                <label for="messaggio">Messaggio</label>
                <textarea class="form-control" name="messaggio" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>   

        </div>
    </div>
</div>

@endsection
