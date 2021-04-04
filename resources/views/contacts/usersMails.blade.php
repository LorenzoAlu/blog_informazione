<html>
   
   <h1>ControCultura</h1>
   <h2>Ultimi annunci</h2>
   {{ $bag['messaggio'] }}   
    @foreach ($articles as $article)
    <h2>{{$article->title}}</h2>
    <p>{{$article->slug}}</p>
    <p>{{$article->body}}</p>

    @endforeach

</html>