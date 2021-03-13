<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    /*   $this->middleware('auth'); */
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $articoli = collect([

      [
        'titolo' => 'titolo 1',
        'sottotitolo'  => 'sottotitolo 1',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20'

      ],

      [
        'titolo' => 'titolo 2',
        'sottotitolo'  => 'sottotitolo 2',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21'
      ],

      [
        'titolo' => 'titolo 3',
        'sottotitolo'  => 'sottotitolo 3',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020'
      ],

      [
        'titolo' => 'titolo 4',
        'sottotitolo'  => 'sottotitolo 4',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978'
      ],

      [
        'titolo' => 'titolo 5',
        'sottotitolo'  => 'sottotitolo 5',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92'
      ],
      [
        'titolo' => 'titolo 6',
        'sottotitolo'  => 'sottotitolo 6',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94'
      ],
      [
        'titolo' => 'titolo 7',
        'sottotitolo'  => 'sottotitolo 7',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908'
      ],
      [
        'titolo' => 'titolo 8',
        'sottotitolo'  => 'sottotitolo 8',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912'
      ]

    ]);

    $lunghezzaArticoli = $articoli->count();
    $ultimi = $articoli->slice($lunghezzaArticoli - 3);

    return view('home', compact('ultimi'));
  }


  public function mostraTutti()


  {

    $articoli = collect([

      [
        'titolo' => 'titolo 1',
        'sottotitolo'  => 'sottotitolo 1',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20'

      ],

      [
        'titolo' => 'titolo 2',
        'sottotitolo'  => 'sottotitolo 2',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21'
      ],

      [
        'titolo' => 'titolo 3',
        'sottotitolo'  => 'sottotitolo 3',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020'
      ],

      [
        'titolo' => 'titolo 4',
        'sottotitolo'  => 'sottotitolo 4',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978'
      ],

      [
        'titolo' => 'titolo 5',
        'sottotitolo'  => 'sottotitolo 5',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92'
      ],
      [
        'titolo' => 'titolo 6',
        'sottotitolo'  => 'sottotitolo 6',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94'
      ],
      [
        'titolo' => 'titolo 7',
        'sottotitolo'  => 'sottotitolo 7',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908'
      ],
      [
        'titolo' => 'titolo 8',
        'sottotitolo'  => 'sottotitolo 8',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912'
      ],


    ]);

    return view('articoli.mostratutti', compact('articoli'));
  }

  public function show($titolo)
  {

    $articoli = collect([

      [
        'titolo' => 'titolo 1',
        'sottotitolo'  => 'sottotitolo 1',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20'

      ],

      [
        'titolo' => 'titolo 2',
        'sottotitolo'  => 'sottotitolo 2',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21'
      ],

      [
        'titolo' => 'titolo 3',
        'sottotitolo'  => 'sottotitolo 3',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020'
      ],

      [
        'titolo' => 'titolo 4',
        'sottotitolo'  => 'sottotitolo 4',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978'
      ],

      [
        'titolo' => 'titolo 5',
        'sottotitolo'  => 'sottotitolo 5',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92'
      ],
      [
        'titolo' => 'titolo 6',
        'sottotitolo'  => 'sottotitolo 6',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94'
      ],
      [
        'titolo' => 'titolo 7',
        'sottotitolo'  => 'sottotitolo 7',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908'
      ],
      [
        'titolo' => 'titolo 8',
        'sottotitolo'  => 'sottotitolo 8',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912'
      ],

    ]);


    $filtro = $articoli->filter(function ($articolo) use ($titolo) {
      return $articolo['titolo'] == $titolo;
    })->first();

    $correlati = $articoli->filter(function ($articolo) use ($filtro) {
      return $articolo['categoria'] == $filtro['categoria'];
    });

    $correlati->shift();


    return view('articoli.show', compact('filtro', 'correlati'));
  }

  public function mostraCategoria($categoria)
  {


    $articoli = collect([

      [
        'titolo' => 'titolo 1',
        'sottotitolo'  => 'sottotitolo 1',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20'

      ],

      [
        'titolo' => 'titolo 2',
        'sottotitolo'  => 'sottotitolo 2',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21'
      ],

      [
        'titolo' => 'titolo 3',
        'sottotitolo'  => 'sottotitolo 3',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020'
      ],

      [
        'titolo' => 'titolo 4',
        'sottotitolo'  => 'sottotitolo 4',
        'categoria' => 'moto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978'
      ],

      [
        'titolo' => 'titolo 5',
        'sottotitolo'  => 'sottotitolo 5',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92'
      ],
      [
        'titolo' => 'titolo 6',
        'sottotitolo'  => 'sottotitolo 6',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94'
      ],
      [
        'titolo' => 'titolo 7',
        'sottotitolo'  => 'sottotitolo 7',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908'
      ],
      [
        'titolo' => 'titolo 8',
        'sottotitolo'  => 'sottotitolo 8',
        'categoria' => 'auto',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912'
      ]

    ]);

    $filtro = $articoli->filter(function ($articolo) use ($categoria) {
      return $articolo['categoria'] == $categoria;
    });



    return view('articoli.categoria', compact('filtro'));
  }
}
