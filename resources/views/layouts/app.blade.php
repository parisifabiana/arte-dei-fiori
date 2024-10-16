<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'L\'arte dei fiori')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link al CSS principale -->
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-light">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-md-4 text-center text-md-start">
                    <img src="{{ asset('immagini/logo-arte-dei-fiori.svg') }}" class="logo img-fluid" alt="L'arte dei fiori" width="200">
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('chi-siamo') ? 'active' : '' }}" href="{{ route('about') }}">CHI SIAMO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('cosa-facciamo') ? 'active' : '' }}" href="{{ route('services') }}">COSA FACCIAMO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">CATALOGO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('contatti') ? 'active' : '' }}" href="{{ route('contact') }}">CONTATTI</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-light mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>L'arte dei fiori</h5>
                    <p>Trasformiamo i vostri momenti speciali in ricordi indimenticabili attraverso l'arte dei fiori.</p>
                </div>
                <div class="col-md-4">
                    <h5>Link utili</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                        <li><a href="{{ route('services') }}">Cosa Facciamo</a></li>
                        <li><a href="{{ route('products.index') }}">Catalogo</a></li>
                        <li><a href="{{ route('contact') }}">Contatti</a></li> 
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contattaci</h5>
                    <ul class="list-unstyled">
                        <li>Email: info@artedeigiori.it</li>
                        <li>Telefono: +39 123 456 7890</li>
                        <li>Indirizzo: Via dei Fiori, 123, Firenze</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            © {{ date('Y') }} L'arte dei fiori. Tutti i diritti riservati.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    @yield('script')
</body>
</html>