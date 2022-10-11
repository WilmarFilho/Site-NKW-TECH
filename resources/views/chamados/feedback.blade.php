
@extends('layouts.bg_foto')


@section('content')

    <div class='container' style='height: 800px'>
    
        <div id='div_feedback' class='text-white text-center'>

            <h2 class='h2-feedback'>Seu chamado foi registrado com sucesso !</h2>
            <p class='p-feedback'>Para ver o andamento dos seus chamados  <a class='link_chamados' href={{route('chamado.index')}}> clique aqui </a>  <p>
            <a href={{route('home')}} class='btn btn-outline-light'>Home  <i class="fa-solid fa-house fa-2x"></i>  </a>

        </div>

    </div>

     <home-component></home-component>

     <script>
     
        setTimeout(function() {
            window.location.href = "http://127.0.0.1:8000/home";
        }, 3200) 
    
     </script>

@endsection