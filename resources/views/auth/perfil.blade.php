@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
        @php  
            
            auth()->user()->img_perfil == null ? $imgPerfil = 'Indefinida' : $imgPerfil =  'storage/' . auth()->user()->img_perfil;

            if(isset($dadosUser)) {

                $dadosUser->img_perfil == null ? $imgPerfil = 'Indefinida' : $imgPerfil =  'storage/' . $dadosUser->img_perfil;

            }

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
                        <input-component label='Nome:' value='@if(isset($dadosUser)) {{$dadosUser->name}} @else {{auth()->user()->name}} @endif' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo2 >
                        <input-component label='Email:' value='@if(isset($dadosUser)) {{$dadosUser->email}} @else {{auth()->user()->email}} @endif' classlabel='label-form'></input-component>
                    </template>  
                </formdisable-component>
                
                @if(!isset($dadosUser))
                    <a class='btn btn-outline-info btn-sm  mt-4' href={{route('perfilsenha')}}>Alterar Senha</a>
                @endif

            </div>
            
            <h2 class='col-md-10 col-12 label-perfil mt-4'>Dados de endereço: </h2>

            <div class='col-md-10 col-12'>

                <formdisable-component>
                    <template v-slot:campo1 > 
                        <input-component label='Cidade:' value='@if(isset($dadosUser)) {{$dadosUser->cidade}} @else {{auth()->user()->cidade}} @endif' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo2 >
                        <input-component label='UF:' value='@if(isset($dadosUser)) {{$dadosUser->estado}} @else {{auth()->user()->estado}} @endif' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo3 >
                        <input-component label='Endereço:' value='@if(isset($dadosUser)) {{$dadosUser->endereco}} @else {{auth()->user()->endereco}} @endif' classlabel='label-form'></input-component>
                    </template>

                    <template v-slot:campo4 >
                        <input-component label='Setor:' value='@if(isset($dadosUser)) {{$dadosUser->setor}} @else {{auth()->user()->setor}} @endif' classlabel='label-form'></input-component>
                    </template>  

                    <template v-slot:campo5 >
                        <input-component label='Celular:' value='@if(isset($dadosUser)) {{$dadosUser->celular}} @else {{auth()->user()->celular}} @endif' classlabel='label-form'></input-component>
                    </template> 
                </formdisable-component>

                @if(!isset($dadosUser))
                    <a class='btn btn-outline-info btn-sm  mt-4' href={{route('perfilendereco')}}>Alterar dados de endereço</a>
                @endif

            </div>

            <h2 class='col-md-10 col-12 label-perfil mt-4'>Dados da assinatura: </h2>

            <div class='col-md-10 col-12'>

                <formdisable-component>
                    <template v-slot:campo1 >
                        <input-component label='Assinatura:' value='@if(isset($dadosUser)) @if($dadosUser->cancelada == 'sim') {{'Cancelada'}} @else {{$dadosUser->assinatura}} @endif @else @if(auth()->user()->cancelada == 'sim') {{'Cancelada'}} @else {{auth()->user()->assinatura}} @endif @endif' classlabel='label-form'></input-component>
                    </template>
                </formdisable-component>
                
                @if(!isset($dadosUser))
                    <form method="POST" action="{{route('portal')}}">
                        @csrf
                        <button class='btn btn-outline-info btn-sm  mt-4'  type="submit">Gerenciar assinatura</button>
                    </form>
                @endif

            </div>


        </div>

        
           
    
    </div>

@endsection