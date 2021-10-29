<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonte -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Scripts -->
    <script
    src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js') }}" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js') }}" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js') }}"  integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') }}">
    <!-- Progress Bar -->
    <script src="{{ asset('js/progressbar.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js') }}"></script>
</head>
<body>
    
    {{-- Navbar --}}
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container" id="nav-container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">
                        3D Print Academy
                </a>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="products-menu" href="/escolha">Produtos</span></a>
                        <a class="nav-item nav-link" id="services-menu" href="/produto/1">Serviços</a>
                        <a class="nav-item nav-link" id="sell-menu" href="/produto/caracteristica/1">Vender</a>
                        <a class="nav-item nav-link" id="pay-menu" href="#">Carrinho</a>
                        <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a>
                    </div>
                </div>
                <div class="justify-contend-end">
                    @guest
                        <a href="{{ route('login') }}" class="nav-link {{(request () -> is ('entrar') || ('login') ||('registrar'))? 'active': ''}}" id="navbar-button"><i class="bi bi-person-circle"></i> Login </a>
                    @else
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                        
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item {{Request::is('meus-dados') ? 'active' : ''}}" href="meus-dados">Meus dados</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Meus pedidos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Meus produtos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Meus serviços</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lista de desejos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sair </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    {{-- Aqui é onde o contéudo é inserido --}}
    <main>
        @yield('content')
        <div id="preenchimento"></div>
    </main>
      



    <footer>
            <div id="copy-area">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <p>Desenvolvido por <a href="https://github.com/Victor-MacielMF" target="_blank">Maciel</a> &copy; 2021</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </footer>
      
    <!-- Scripts do projeto -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>