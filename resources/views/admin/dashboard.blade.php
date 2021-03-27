@extends('layouts.app')
<x-header_small />
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 text-canter">
                <h2> Dashboard admin</h2>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="bg-white shadow d-inline-block rounded-3 ">
                    <p class="display-3">{{$totalArticle}}</p>
                    <p>Articoli Pubblicati</p>
                </div>
                <div class="bg-white shadow d-inline-block rounded-3">
                    <p class="display-3">{{$totalUser}}</p>
                    <p>Utenti Iscritti</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h2>Lista Utenti</h2>
            </div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Articoli Pubblicati</th>
                            <th scope="col">Iscritto Dal</th>
                            <th scope="col">Blocca/Sblocca</th>
                            <th scope="col">Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->name }}</th>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a class="text-dark"
                                        href="{{ route('articles.for.user', $user) }}">{{ count($user->articles) }}</a>
                                </td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                <td>
                                    @if ($user->disable == false)
                                        <a href="{{ route('user.toggle', $user) }}" class="btn btn-warning">Disabilità</a>
                                    @else
                                        <a href="{{ route('user.toggle', $user) }}" class="btn btn-primary">Abilita</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $users->links() }}

@endsection
