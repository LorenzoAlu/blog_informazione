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
        'titolo' => 'Titolo 1',
        'sottotitolo'  => 'Sottotitolo 1',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'

      ],

      [
        'titolo' => 'Titolo 2',
        'sottotitolo'  => 'Sottotitolo 2',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 3',
        'sottotitolo'  => 'Sottotitolo 3',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 4',
        'sottotitolo'  => 'Sottotitolo 4',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201',
      ],

      [
        'titolo' => 'Titolo 5',
        'sottotitolo'  => 'Sottotitolo 5',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 6',
        'sottotitolo'  => 'Sottotitolo 6',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 7',
        'sottotitolo'  => 'Sottotitolo 7',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 8',
        'sottotitolo'  => 'Sottotitolo 8',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 9',
        'sottotitolo'  => 'Sottotitolo 9',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 10',
        'sottotitolo'  => 'Sottotitolo 10',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 11',
        'sottotitolo'  => 'Sottotitolo 11',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ] ,
      [
        'titolo' => 'Titolo 12',
        'sottotitolo'  => 'Sottotitolo 12',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
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
        'titolo' => 'Titolo 1',
        'sottotitolo'  => 'Sottotitolo 1',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'

      ],

      [
        'titolo' => 'Titolo 2',
        'sottotitolo'  => 'Sottotitolo 2',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 3',
        'sottotitolo'  => 'Sottotitolo 3',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 4',
        'sottotitolo'  => 'Sottotitolo 4',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201',
      ],

      [
        'titolo' => 'Titolo 5',
        'sottotitolo'  => 'Sottotitolo 5',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 6',
        'sottotitolo'  => 'Sottotitolo 6',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 7',
        'sottotitolo'  => 'Sottotitolo 7',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 8',
        'sottotitolo'  => 'Sottotitolo 8',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 9',
        'sottotitolo'  => 'Sottotitolo 9',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 10',
        'sottotitolo'  => 'Sottotitolo 10',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 11',
        'sottotitolo'  => 'Sottotitolo 11',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ] ,
      [
        'titolo' => 'Titolo 12',
        'sottotitolo'  => 'Sottotitolo 12',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ]



    ]);

    return view('articoli.mostratutti', compact('articoli'));
  }

  public function show($titolo)
  {

    $articoli = collect([

      [
        'titolo' => 'Titolo 1',
        'sottotitolo'  => 'Sottotitolo 1',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'

      ],

      [
        'titolo' => 'Titolo 2',
        'sottotitolo'  => 'Sottotitolo 2',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 3',
        'sottotitolo'  => 'Sottotitolo 3',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 4',
        'sottotitolo'  => 'Sottotitolo 4',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201',
      ],

      [
        'titolo' => 'Titolo 5',
        'sottotitolo'  => 'Sottotitolo 5',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 6',
        'sottotitolo'  => 'Sottotitolo 6',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 7',
        'sottotitolo'  => 'Sottotitolo 7',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 8',
        'sottotitolo'  => 'Sottotitolo 8',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 9',
        'sottotitolo'  => 'Sottotitolo 9',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 10',
        'sottotitolo'  => 'Sottotitolo 10',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 11',
        'sottotitolo'  => 'Sottotitolo 11',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ] ,
      [
        'titolo' => 'Titolo 12',
        'sottotitolo'  => 'Sottotitolo 12',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ]



    ]);




    $filtro = $articoli->filter(function ($articolo) use ($titolo) {
      return $articolo['titolo'] == $titolo;
    })->first();

    $correlati = $articoli->filter(function ($articolo) use ($filtro) {
      return $articolo['categoria'] == $filtro['categoria'];
    });

    $correlatiMenoFirst= $correlati->filter(function($articolo) use ($filtro){
      return $articolo !== $filtro;
    });

    // $correlati->shift();


    return view('articoli.show', compact('filtro', 'correlatiMenoFirst'));
  }

  public function mostraCategoria($categoria)
  {


    $articoli = collect([

      [
        'titolo' => 'Titolo 1',
        'sottotitolo'  => 'Sottotitolo 1',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '10/09/20',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'

      ],

      [
        'titolo' => 'Titolo 2',
        'sottotitolo'  => 'Sottotitolo 2',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '17/08/21',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 3',
        'sottotitolo'  => 'Sottotitolo 3',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '5/03/2020',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],

      [
        'titolo' => 'Titolo 4',
        'sottotitolo'  => 'Sottotitolo 4',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/12/1978',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201',
      ],

      [
        'titolo' => 'Titolo 5',
        'sottotitolo'  => 'Sottotitolo 5',
        'categoria' => 'Sport',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '06/05/92',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 6',
        'sottotitolo'  => 'Sottotitolo 6',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '24/09/94',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 7',
        'sottotitolo'  => 'Sottotitolo 7',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '09/03/1908',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 8',
        'sottotitolo'  => 'Sottotitolo 8',
        'categoria' => 'Tecnologia',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 9',
        'sottotitolo'  => 'Sottotitolo 9',
        'categoria' => 'Politica',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 10',
        'sottotitolo'  => 'Sottotitolo 10',
        'categoria' => 'Spettacolo',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ],
      [
        'titolo' => 'Titolo 11',
        'sottotitolo'  => 'Sottotitolo 11',
        'categoria' => 'Motori',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ] ,
      [
        'titolo' => 'Titolo 12',
        'sottotitolo'  => 'Sottotitolo 12',
        'categoria' => 'Attualità',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!',
        'data' => '15/04/1912',
        'immagine_1' => 'https://picsum.photos/600/200',
        'immagine_2' => 'https://picsum.photos/600/201'
      ]



    ]);

    $filtro = $articoli->filter(function ($articolo) use ($categoria) {
      return $articolo['categoria'] == $categoria;
    });



    return view('articoli.categoria', compact('filtro'));
  }
}
