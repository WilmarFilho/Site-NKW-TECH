<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Icon -->
    <link rel="icon"  href="{{asset('img/icon.png')}}">

    <!-- Style custom  -->
    <link rel='stylesheet' href='css/index.css'>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icones -->
    <script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src='js/index.js'></script>

    <script> 
    
            $(document).ready(function(){
				$('nav ul a').click(function(e){
					e.preventDefault()
					var id = $(this).attr('href');
						targetOffset = $(id).offset().top;

					$('html, body').animate({
						scrollTop: targetOffset - 100
					}, 500)

				})
			});
    
    </script>

</head>
<body>
    <div id="app" class='container-fluid'>
        <nav class="navbar navbar-expand-md navbar-dark bg-nav-custom shadow-sm fixed-top">
            <div class="container">
               <a id='btn-login' class="btn btn-outline-danger nav-link" href="{{ route('login') }}">{{ __('Área do Usuário') }}
                 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav  ms-auto mt-1">
                            @if (Route::has('login'))
                                <li class="nav-item text-center">
                                    <a class="nav-link" href="#video">{{ __('Sobre Nós') }}</a> 
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link" href="#feedback">{{ __('Nossos clientes') }}</a> 
                                </li>
                             
                            @endif

                            <!--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif -->
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
