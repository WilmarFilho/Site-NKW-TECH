@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>

        <div class='col-5 text-center mt-3'>
            <img src='img/foto.jpg' class='img-fluid img-perfil' width=150>
            <h3 class='nome-perfil mt-3'>{{auth()->user()->name}}</h3>
        </div>

        <div class='row justify-content-center col-12'>

            <h2 class='col-10 label-perfil'>Dados cadastrais: </h2>

            <div class='col-10'>
                <form>
                    <fieldset disabled>
                        <div class='row'>
                            <div class='col-5'>
                                <label class='label-form'>Email:</label>
                                <input class='form-control disable' type='text' value='{{auth()->user()->email}}'>
                            </div>
                            <div class='col-5'>
                                <label class='label-form'>Senha:</label>
                                <input class='form-control' type='password' value='senhasenha'>
                            </div>
                        </div>
                    </fieldset>
                
                </form>
            </div>
            
            <h2 class='col-10 label-perfil mt-4'>Dados de endereço: </h2>

            <div class='col-10'>
                <form>
                    <fieldset disabled>
                        <div class='row'>
                            <div class='col-5'>
                                <label class='label-form'>Endereço:</label>
                                <input class='form-control disable' type='text' value=''>
                            </div>
                            <div class='col-5'>
                                <label class='label-form'>Setor:</label>
                                <input class='form-control' type='password' value=''>
                            </div>
                        </div>
                    </fieldset>
                
                </form>
            </div>


        </div>

    
    
    
    </div>


@endsection