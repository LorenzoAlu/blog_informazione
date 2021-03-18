    <!-- navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0 fixed-top ">

        <!--  Show this only on mobile to medium screens  -->
        <a class="navbar-brand d-lg-none ms-2" href="{{ route('home') }}"><img class="logo_navbar_small" width="100px " alt="foto logo "></a>

        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle"
            aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <!--  Use flexbox utility classes to change how the child elements are justified  -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

            <ul class="navbar-nav">
                <li class="nav-item ps-1 ps-lg-2">
                    <a class="nav-link active" id="nav_link" href="{{ route('home') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item ps-1">
                    <a class="nav-link" id="nav_link_1" href="{{ route('articoli.mostratutti') }}">Tutti Gli Articoli</a>
                </li>
                <li class="dropdown nav-item ps-1">
                    <a class="nav-link dropdown-toggle"  id="nav_link_2" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                       Categorie
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Politica')}}">Politica </a></li>
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Spettacolo')}}">Spettacolo </a></li>
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Sport')}}">Sport</a></li>
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Motori')}}">Motori</a></li>
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Attualità')}}">Attualità</a></li>
                        <li><a class="dropdown-item" href="{{route('articoli.categoria','Tecnologia')}}">Tecnologia</a></li>
                    </ul>
                </li>
            </ul>


            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-lg-block me-5 pe-5 " href="{{ route('home') }}"><img class="logo_navbar me-4 " width="100px"
                    alt="logo"></a>



                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link"  id="nav_link_3" href="{{ route('login') }}">Accedi</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item pe-2">
                                    <a class="nav-link"  id="nav_link_4" href="{{ route('register') }}">Registrati</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
            
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    {{-- <a class="dropdown-item" href="{{ route('users.profile') }}">
                                      Profilo
                                      </a> --}}
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                 </li>
                        @endguest
                    </ul>
        </div>
    </nav>
