@extends('layouts.bg_perfil')

@section('content')

     

    <div id='container' class='container mx-auto row justify-content-center'>

           <montagem-component titulo='Processador' subtitulo='' rota='{{route('montagem', ['tipo' => 'ram'])}}'>

                <select id='escolha' name='processador' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>

                <input id='nomeplacam' name='nomeplacam' type='hidden' value='{{$placam}}'>
                <input id='nddr' name='nddr' type='hidden' value='{{$ddr}}'>
                <input id='ngeracao' name='ngeracao' type='hidden' value=''>
                
           </montagem-component>

            <p id='hardware' style='display: none;'>processador</p>
    
    </div>

@endsection
