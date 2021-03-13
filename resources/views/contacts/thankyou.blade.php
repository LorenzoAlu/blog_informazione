@extends('layouts.app')

<x-header_small/>

@section('content')
<div class="container my-5 thankyou">
    <div class="row align-items-center justify-content-center h-100 ">
        <div class="col-8 text-center bg-white  rounded shadow p-4">
            <h1 class="text-dark fw-bold p-3">Ben fatto coglione, ci sei riuscito!</h1>
            <button class="btn btn-warning my-3"><a href="{{route('home')}}" class="text-decoration-none text-dark">
                Ritorna alla home
            </a>
        </button>
        </div>
    </div>
</div>




@endsection