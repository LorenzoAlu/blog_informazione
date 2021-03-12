@props(['titolo', 'sottotitolo', 'categoria', 'body']),


<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $titolo }}</h5>
        <h4 class="card-text">{{ $sottotitolo }}</h4>
        <p class="card-text text-danger">
        <a href="{{ route('articoli.categoria', ['categoria'=>$categoria])}}">{{ $categoria }}</a></p>
        <p class="card-text">{{ $body }}</p>
        <a href="{{ route('articoli.show', ['articolo'=>$titolo])}}" class="btn btn-primary">VAI ALL'ARTICOLO</a>
    </div>
</div>

