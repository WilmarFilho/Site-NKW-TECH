@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
        @php  auth()->user()->img_perfil == null ? $imgPerfil = 'Indefinida' : $imgPerfil =  'storage/' . auth()->user()->img_perfil;   @endphp
        
        <div class='col-md-5 col-12 text-center mt-3 row justify-content-center'>
            <div class='col-8'>    
                @if($imgPerfil !== 'Indefinida')
                    <img src='{{asset($imgPerfil)}}' class='img-fluid img-perfil' width=150>
                @else 
                    <i class="fa-solid fa-user fa-4x text-white"></i>
                @endif
                
            </div>
            <form class='col-12' method='POST' action='/perfil-foto' enctype="multipart/form-data">
                @csrf
                <label class='label-form'> @if($imgPerfil == 'Indefinida') Carregar @endif  @if($imgPerfil !== 'Indefinida') Alterar @endif foto de perfil</label>
                <div class='input-group'>
                    <input  type='file' class='form-control' name='imgPerfil' id='imgPerfil'>
                    <button  type='submit' class='btn btn-info '>Alterar</button>
                </div>
                
            </form>
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
                <form>
                    <fieldset disabled>
                        <div class='row'>
                            <div class='col-md-5 col-10'>
                                <label class='label-form'>Nome:</label>
                                <input class='form-control disable' type='text' value='{{auth()->user()->name}}'>
                            </div>
                            <div class='col-md-5 col-10'>
                                <label class='label-form'>Email:</label>
                                <input class='form-control disable' type='text' value='{{auth()->user()->email}}'>
                            </div>
                        </div>
                    </fieldset>
                
                </form>

                <a class='btn btn-outline-info btn-sm  mt-4' href={{route('perfilsenha')}}>Alterar Senha</a>

            </div>
            
            <h2 class='col-md-10 col-12 label-perfil mt-4'>Dados de endereço: </h2>

            <div class='col-md-10 col-12'>
                <form>
                    <fieldset disabled>
                        <div class='row'>
                            <div class='col-md-5 col-10'>
                                <label class='label-form'>Endereço:</label>
                                <input class='form-control disable' type='text' value=''>
                            </div>
                            <div class='col-md-5 col-10'>
                                <label class='label-form'>Setor:</label>
                                <input class='form-control' type='password' value=''>
                            </div>
                        </div>
                    </fieldset>
                
                </form>

                <button class='btn btn-outline-info btn-sm  mt-4'>Alterar Endereço</button>

            </div>


        </div>

        
           
    
    </div>

@endsection