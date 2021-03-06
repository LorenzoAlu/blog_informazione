@extends('layouts.app')


@section('content')
    <x-header />
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 text-center text-color-custom my-5">
                <h2>Ultime Notizie</h2>
            </div>
            @foreach ($ultimi as $ultimo)

                <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                    <x-card route="{{ route('articles.show', $ultimo) }}" title="{{ $ultimo->title }}"
                        slug="{{ $ultimo->slug }}" body="{{ $ultimo->body }}" category="{{ $ultimo->category->name }}"
                        date="{{ $ultimo->created_at->format('d/m/y') }}" />
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-center text-color-custom">Inviaci le tue segnalazioni</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('contacts.send') }}">
                    @csrf
                    <div class="form-group">
                        <label class="text-color-custom py-2" for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome') }}">
                        @error('nome')
                            <div class="alert  background-accent d-inline-block my-3 text-dark text-uppercase">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-color-custom  py-2" for="exampleInputEmail1">Inserisci E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            value="{{ old('email') }}" aria-describedby="emailHelp">
                        @error('email')
                            <div class="alert  background-accent d-inline-block my-3 text-dark text-uppercase">
                                {{ $message }}</div>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <label class="text-color-custom  py-2" for="messaggio">Messaggio</label>
                    <textarea class="form-control" name="messaggio" id="" cols="30"
                        rows="10">{{ old('messaggio') }}</textarea>
                    @error('messaggio')
                        <div class="alert  background-accent d-inline-block my-3 text-dark text-uppercase">{{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn background-secondary my-3 w-100 text-white">Invia</button>
                </form>

            </div>
        </div>
    </div>
@endsection
