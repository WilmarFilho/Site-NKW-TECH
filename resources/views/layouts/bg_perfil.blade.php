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
    <link rel='stylesheet' href="{{asset('css/perfil.css')}}"> 
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Icones -->
    <script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->

    <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script>

        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                
            $("#escolha").on('change', function(){

                $('#descricao').fadeOut()
                $('#foto').fadeOut()

                let valorSelect = document.getElementById('escolha').value;
                
                let tipo = document.getElementById('hardware').innerHTML;
              
                let rota = '/ajax-montagem/' + tipo + '/' + valorSelect
            
                        
                $.ajax({
                    url: rota,
                    type: 'POST',
                    contentType: 'application/json',
                    
                    success: function(data) {
                        

                        $("#marca").html(data['marca'])
                        $("#geracao").html(data['geracao'])
                        $("#frequencia").html(data['frequencia'])
                        $("#memoria").html(data['memoria'] + 'gb')
                        $("#capacidade").html(data['capacidade'])
                        $("#potencia").html(data['potenciaf'])
                        $("#resumo").html(data['descricao'])
                        $("#modelo").html(data['modelo'])
                        $("#socket").attr("value", data['socket'] )
                        $("#ddr").attr("value", data['ddr'] )
                        $("#ngeracao").attr("value", data['ngeracao'] ) 
                        $("#potencia").attr("value", data['potencia'] )

                        var urlFoto = "http://localhost:8000/" + data['foto']

                        $("#foto").attr("src", urlFoto )

                        $('#descricao').fadeIn()
                        $('#foto').fadeIn()
                            
                        
                        
                        if (data['modelo'] == ''  || data['modelo'] == null || data['modelo'] == ' ') {
                            $("#rowModelo").fadeOut() 
                        } else {
                            $("#rowModelo").fadeIn() 
                        }

                        if (data['geracao'] == '' || data['geracao'] == null) {
                            $("#rowGeracao").fadeOut() 
                        } else {
                            $("#rowGeracao").fadeIn() 
                        }

                        if (data['frequencia'] == '' || data['frequencia'] == null) {
                            $("#rowFrequenciaR").fadeOut() 
                        } else {
                            $("#rowFrequenciaR").fadeIn() 
                        }


                        if (data['memoria'] == '' || data['memoria'] == null) {
                            $("#rowRamvideo").fadeOut() 
                        } else {
                            $("#rowRamvideo").fadeIn() 
                        }

                        if (data['capacidade'] == '' || data['capacidade'] == null) {
                            $("#rowCapacidade").fadeOut() 
                        } else {
                            $("#rowCapacidade").fadeIn() 
                        }

                        if (data['potenciaf'] == '' || data['potenciaf'] == null || data['potenciaf'] == ' ') {
                            $("#rowPotencia").fadeOut() 
                        } else {
                            $("#rowPotencia").fadeIn() 
                        }
                        
                    
                        
                    }
                });

                

            });

        });


    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-nav-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src={{asset('img/logo.png')}} class='img-fluid' width='250'>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown text-center">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('perfil') }}"
                                       >
                                        {{ __('Perfil') }} <i class="fa-solid fa-user"></i>
                                    </a>
                                    <a class="dropdown-item text-dark" href="{{ route('ajuda') }}"
                                       >
                                        {{ __('Ajuda AnyDesk ') }}<i class="fa-solid fa-circle-info"></i>
                                    </a>
                                     <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }} <i class="fa-solid fa-right-from-bracket"></i>
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
