@extends('layouts.app')

{{-- <x-header-small/> --}}

@section('content')
<div class="container my-5 thankyou">
    <div class="row align-items-center justify-content-center h-100 ">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Ben fatto coglione, ci sei riuscito!</h1>
            <button class="btn btn-warning"><a href="{{route('home')}}" class="text-decoration-none text-dark">
                Ritorna alla home
            </a>
        </button>
        </div>
    </div>
</div>




@endsection