@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
        @php  
            auth()->user()->img_perfil == null ? $imgPerfil = 'Indefinida' : $imgPerfil =  'storage/' . auth()->user()->img_perfil;
        @endphp
        
        <div class='col-md-5 col-12 text-center mt-3 row justify-content-center'>
            <div class='col-8'>    
                @if($imgPerfil !== 'Indefinida')
                    <img src='{{asset($imgPerfil)}}' class='img-fluid img-perfil' width=150>
                @else 
                    <i class="fa-solid fa-user fa-4x text-white"></i>
                @endif
                
            </div>
        

            <formsimples-component token_csrf={{csrf_token()}} label='Alterar foto de perfil' classlabel='label-form mt-2' labelbtn='Alterar' classbtn='btn btn-info' route='/perfil-foto' enctype='multipart/form-data'>
                <input  type='file' class='form-control' name='imgPerfil' id='imgPerfil'>
            </formsimples-component>

                @if($errors != '[]')
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php foreach ($errors->all() as $message) { ?>
                            <span>{{$message}}</span> <br>
                        <?php } ?>
                    </div>
                @endif
          
        </div>

        <div class='row justify-content-center col-12 mt-5'>

            <h2 class='col-md-10 col-12 label-perfil'>Dados cadastrais: </h2>

            <div class='col-md-10 col-12'>

                <formdisable-component>
                    <template v-slot:campo1 >
                        <input-component label='Nome:' value='{{auth()->user()->name}}' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo2 >
                        <input-component label='Email:' value='{{auth()->user()->email}}' classlabel='label-form'></input-component>
                    </template>  
                </formdisable-component>

                <a class='btn btn-outline-info btn-sm  mt-4' href={{route('perfilsenha')}}>Alterar Senha</a>

            </div>
            
            <h2 class='col-md-10 col-12 label-perfil mt-4'>Dados de endereço: </h2>

            <div class='col-md-10 col-12'>

                <formdisable-component>
                    <template v-slot:campo1 >
                        <input-component label='Endereço:' value='{{auth()->user()->endereco}}' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo2 >
                        <input-component label='Setor:' value='{{auth()->user()->setor}}' classlabel='label-form'></input-component>
                    </template>  

                    <template v-slot:campo3 >
                        <input-component label='Celular:' value='{{auth()->user()->celular}}' classlabel='label-form'></input-component>
                    </template> 
                </formdisable-component>

                <a class='btn btn-outline-info btn-sm  mt-4' href={{route('perfilendereco')}}>Alterar dados de endereço</a>

            </div>

            <h2 class='col-md-10 col-12 label-perfil mt-4'>Dados da assinatura: </h2>

            <div class='col-md-10 col-12'>

                <formdisable-component>
                    <template v-slot:campo1 >
                        <input-component label='Assinatura:' value='{{auth()->user()->assinatura}}' classlabel='label-form'></input-component>
                    </template>
                </formdisable-component>

                <a class='btn btn-outline-info btn-sm  mt-4' href='https://billing.stripe.com/p/login/test_3cs8yR6v6aYG1hu288'>Gerenciar assinatura</a>

            </div>


        </div>

        
           
    
    </div>

@endsection