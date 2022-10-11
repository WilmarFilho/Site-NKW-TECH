@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
      <div class='col-md-8 col-12'>
            <h2 class='label-perfil text-center'> Alterar dados cadastrais  </h2>
      </div>

      <div class='col-md-6 col-8 mt-2'>

        <formdados-component token_csrf={{csrf_token()}} route='{{route('alteraendereco')}}' labelbtn='Alterar'>
        
            <template v-slot:campo1 >
                <input-component label='Novo Endereço:' placeholder='Digite seu novo endereco' classlabel='label-formulario' name='endereco'></input-component>
            </template>

            <template v-slot:campo2 >
                <input-component label='Novo Setor:' placeholder='Digite seu novo setor' classlabel='label-formulario' name='setor'></input-component>
            </template>  

            <template v-slot:campo3 >
                <input-component label='Novo Celular:' placeholder='Digite seu novo celular' classlabel='label-formulario' name='celular'></input-component>
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