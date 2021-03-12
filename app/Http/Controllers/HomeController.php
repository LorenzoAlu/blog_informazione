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
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 2',
            'sottotitolo'  => 'sottotitolo 2',
            'categoria' => 'moto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 3',
            'sottotitolo'  => 'sottotitolo 3',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 4',
            'sottotitolo'  => 'sottotitolo 4',
            'categoria' => 'moto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 5',
            'sottotitolo'  => 'sottotitolo 5',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
            'titolo' => 'titolo 6',
            'sottotitolo'  => 'sottotitolo 6',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
          'titolo' => 'titolo 7',
          'sottotitolo'  => 'sottotitolo 7',
          'categoria' => 'auto',
          'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
          'titolo' => 'titolo 8',
          'sottotitolo'  => 'sottotitolo 8',
          'categoria' => 'auto',
          'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
      ]
    
    ]);

          $lunghezzaArticoli = $articoli->count();
          $ultimi=$articoli->slice($lunghezzaArticoli-3);

        return view('home',compact('ultimi'));
    }


    public function mostraTutti()

    
    {

      $articoli = collect([

        [
            'titolo' => 'titolo 1',
            'sottotitolo'  => 'sottotitolo 1',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 2',
            'sottotitolo'  => 'sottotitolo 2',
            'categoria' => 'moto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 3',
            'sottotitolo'  => 'sottotitolo 3',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 4',
            'sottotitolo'  => 'sottotitolo 4',
            'categoria' => 'moto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],

        [
            'titolo' => 'titolo 5',
            'sottotitolo'  => 'sottotitolo 5',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
            'titolo' => 'titolo 6',
            'sottotitolo'  => 'sottotitolo 6',
            'categoria' => 'auto',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
          'titolo' => 'titolo 7',
          'sottotitolo'  => 'sottotitolo 7',
          'categoria' => 'auto',
          'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
        ],
        [
          'titolo' => 'titolo 8',
          'sottotitolo'  => 'sottotitolo 8',
          'categoria' => 'auto',
          'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, totam quos illo dolorum error incidunt in exercitationem sed quas quod dicta, doloribus placeat? Qui reprehenderit quod ipsum illo eos tenetur!'
      ]
    
    ]);

      return view('articoli.mostratutti',compact('articoli'));
    }


}
