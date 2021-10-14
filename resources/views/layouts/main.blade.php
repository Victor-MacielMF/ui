<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
    {{-- Navbar --}}
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container" id="nav-container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                        3D Print Academy
                </a>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" id="products-menu" href="welcome">Produtos</span></a>
                        <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>
                        <a class="nav-item nav-link" id="sell-menu" href="#">Vender</a>
                        <a class="nav-item nav-link" id="pay-menu" href="#">Carrinho</a>
                        <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a>
                    </div>
                </div>
                <div class="justify-contend-end">
                    <a href="/entrar" class="nav-link {{(request () -> is ('entrar') || ('login') ||('registrar'))? 'active': ''}}" id="navbar-button"><i class="bi bi-person-circle"></i> Login </a>
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
    <script src="js/scripts.js"></script>
</body>
</html>