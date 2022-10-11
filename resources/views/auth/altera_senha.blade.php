@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
      <div class='col-md-8 col-12'>
            <h2 class='label-perfil text-center'> Alterar senha  </h2>
      </div>

      <div class='col-md-6 col-8 mt-2'>
        <form action='{{route('alteraSenha')}}' method='POST' class='text-center'>
            @csrf
            <label class='label-formulario'> Antiga senha</label>
            <input class='form-control' type='password' name='antigaSenha' placeholder='Digite sua antiga senha'>

            <label class='label-formulario'> Nova senha</label>
            <input class='form-control' type='password' name='novaSenha' placeholder='Digite sua nova senha'>

             <label class='label-formulario'> Confirme a senha</label>
            <input class='form-control' type='password' name='novaSenha_confirmation' placeholder='Confirme sua nova senha'>

            @if($errors != '[]')
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php foreach ($errors->all() as $message) { ?>
                            <span>{{$message}}</span> <br>
                        <?php } ?>
                    </div>
            @endif

            <button type='submit' class='btn btn-danger mt-3'>Alterar</button>
        </form>
      </div>

    </div>


@endsection