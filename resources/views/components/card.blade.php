@props(['titolo', 'sottotitolo', 'categoria', 'body']),

{{-- 
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
 --}}




   
        
            
                <li class="articles__article" style="--animation-order:1"><a class="articles__link">
                        <div class="articles__content articles__content--lhs">
                            <h2 class="articles__title">{{$titolo}}</h2>
                            <p class="articles__body">{{$body}} [...]</p>
                            <h3 class="articles__subtitle">{{$sottotitolo}}</h3>
                            <div class="articles__footer">
                                <p>{{$categoria}}</p>
                                <time>1 Jan 2020</time>
                            </div>
                        </div>
                        <div class="articles__content articles__content--rhs">
                            <h2 class="articles__title">{{$titolo}}</h2>
                            <p class="articles__body">{{$body}} [...]</p>
                            <p class="articles__subtitle">{{$sottotitolo}}</p>
                            <div class="articles__footer">
                                <p>{{$categoria}}</p>
                                <time>1 Jan 2020</time>
                            </div>
                        </div>
                    </a>
                </li>
           
        

   


