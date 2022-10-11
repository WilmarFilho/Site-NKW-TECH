@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
      <div class='col-md-8 col-12'>
            <h2 class='label-perfil text-center'> Alterar dados cadastrais  </h2>
      </div>

      <div class='col-md-6 col-8 mt-2'>
        <form action='{{route('alteraendereco')}}' method='POST' class='text-center'>
            @csrf
            <label class='label-formulario'> Novo Endereço</label>
            <input class='form-control' type='text' name='endereco' placeholder='Digite seu novo endereco'>

            <label class='label-formulario'> Novo Setor</label>
            <input class='form-control' type='text' name='setor' placeholder='Digite seu novo setor'>

             <label class='label-formulario'> Novo Celular</label>
            <input class='form-control' type='text' name='celular' placeholder='Digite seu novo celular '>

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