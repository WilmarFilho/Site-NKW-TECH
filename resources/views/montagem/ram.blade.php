@extends('layouts.bg_perfil')

@section('content')
   
    <div id='container' class='container mx-auto row justify-content-center'>


        <montagem-component titulo='Memoria Ram' subtitulo='' rota='{{route('montagem', ['tipo' => 'placav'])}}'>

                <select id='escolha' name='ram' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>
                
                <input id='nomeplacam' name='nomeplacam' type='hidden' value='{{$nomeplacam}}'>
                <input id='nomeprocessador' name='nomeprocessador' type='hidden' value='{{$nomeprocessador}}'>  
                <input name='ngeracao' type='hidden' value='{{$ngeracao}}'>
                
        </montagem-component>

        <p id='hardware' style='display: none;'>ram</p>
          
    </div>

@endsection

