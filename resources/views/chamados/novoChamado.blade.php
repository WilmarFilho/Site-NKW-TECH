@extends('layouts.bg_perfil')

@section('content')
    <div class='container mx-auto row justify-content-center text-center'>
        <div id='adicionaChamado' class='m-4'>

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
    <div>

    <home-component route='\home'> </home-component>

@endsection