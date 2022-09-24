@extends('layouts.bg_perfil')

@section('content')

    <div id='adicionaChamado' class='container mx-auto row justify-content-center text-center'>

        <form-component token_csrf='{{csrf_token()}}'>
            
            @if($errors != '[]')
                <div class="alert alert-danger mt-3" role="alert">
                    <?php foreach ($errors->all() as $message) { ?>
                        <span>{{$message}}</span> <br>
                    <?php } ?>
                </div>
            @endif
       
        </form-component>

    </div>

    <div id='home'>

        <a href={{route('home')}}><i class="fa-solid fa-house fa-2x"></i> </a>
     
    </div>

@endsection