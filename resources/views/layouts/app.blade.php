<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4ff5c0a70f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">

</head>
<body>
    <div id="app">
     

    <!-- navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark  p-0 m-0  fixed-top">

      <!--  Show this only on mobile to medium screens  -->
      <a class="navbar-brand d-lg-none" href="#"><img class="logo_navbar_small" width="100px" alt="foto logo "></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle"
          aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!--  Use flexbox utility classes to change how the child elements are justified  -->
      <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Esplora</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Random</a>
              </li>
          </ul>


          <!--   Show this only lg screens and up   -->
          <a class="navbar-brand d-none d-lg-block me-5" href="#"><img class="logo_navbar" width="100px"
                  alt="logo"></a>



          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Iscriviti</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Accedi</a>
              </li>
          </ul>
      </div>
  </nav>


       
       
          <main class="py-4">
            @yield('content')
        </main>


 <!-- footer  -->

 <div class="container-fluid bg-dark mt-5 pb-5 ">
  <div class="row justify-content-around">

      <div class="col-12 col-md-6 text-white my-5 text-center text-md-start">

          <h3> Disclaimer</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae reiciendis nesciunt, quo
              accusantium deserunt est maiores vel, impedit suscipit labore doloribus. Laudantium repellat laborum
              nobis quasi. Quisquam cupiditate ex enim.</p>

      </div>
      <div class="col-12  col-md-4 text-black bg-main-color footer-blue">
          <div>
              <h3 class="text-black  ">Social</h3>
          </div>
          <div class="d-flex justify-content-evenly w-100 text-black ">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-linkedin"></i>
          </div>
          <div>
              <img class="d-blockmx-auto  img-fluid " src="./media/small_s.png" width="150px"
                  alt="immagine del logo">

          </div>


      </div>
  </div>
</div>


    </div>
</body>
</html>
