@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
      <div class='col-md-8 col-12'>
            <h2 class='label-perfil text-center'> Alterar senha  </h2>
      </div>

      <div class='col-md-6 col-8 mt-2'>
        <formdados-component token_csrf={{csrf_token()}} route='{{route('alteraSenha')}}' labelbtn='Alterar'>
            <template v-slot:campo1 >
                <input-component type='password' label='Antiga senha:' placeholder='Digite sua senha atual' classlabel='label-formulario' name='antigaSenha' ></input-component>
            </template>

            <template v-slot:campo2 >
                <input-component type='password' label='Nova Senha:' placeholder='Digite sua nova senha' classlabel='label-formulario' name='novaSenha' ></input-component>
            </template>  

            <template v-slot:campo3 >
                <input-component type='password' label='Confirme a senha:' placeholder='Confirme sua nova senha' classlabel='label-formulario' name='novaSenha_confirmation'></input-component>
            </template> 

            <template v-slot:campo4 >
                @if($errors != '[]')
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php foreach ($errors->all() as $message) { ?>
                            <span>{{$message}}</span> <br>
                        <?php } ?>
                    </div>
                @endif
            </template> 
        </formdados-component>
      </div>

    </div>


@endsection