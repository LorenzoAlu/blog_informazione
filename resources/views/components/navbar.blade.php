    <!-- navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0 fixed-top">

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
                    <a class="nav-link active" href="{{ route('home') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articoli.mostratutti') }}">Esplora</a>
                </li>
                <li class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                       Categorie
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="articoli.auto">test auto </a></li>
                        <li><a class="dropdown-item" href="articoli.moto">moto mona</a></li>
                        <li><a class="dropdown-item" href="#">Politica</a></li>
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                        <li><a class="dropdown-item" href="#">Attualità</a></li>
                        <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                    </ul>
                </li>
            </ul>


            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-lg-block me-5 pe-5" href="#"><img class="logo_navbar" width="100px"
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
