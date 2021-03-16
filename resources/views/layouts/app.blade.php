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
     
        
        
        <main>
            <x-navbar/>
            @yield('content')
        </main>


 <!-- footer  -->

 <div class="container-fluid bg-dark mt-5 pb-5 ">
  <div class="row justify-content-around margin-top-custom-2">

      <div class="col-12 col-md-6 text-white my-5 text-center text-md-start">

          <h3> Disclaimer</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae reiciendis nesciunt, quo
              accusantium deserunt est maiores vel, impedit suscipit labore doloribus. Laudantium repellat laborum
              nobis quasi. Quisquam cupiditate ex enim.</p>

      </div>
      <div class="col-12  col-md-4 text-dark bg-main-color footer-blue">
          <div>
              <h3 class="text-dark  ">Social</h3>
          </div>
          <div class="d-flex justify-content-evenly w-100 text-dark ">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-linkedin"></i>
          </div>
          <div>
              <img class="d-block mx-auto  img-fluid " src="/media/small_s.png" width="150px"
                  alt="immagine del logo">

          </div>


      </div>
  </div>
</div>


    </div>
</body>
</html>
