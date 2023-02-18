@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
  
           <montagem-component titulo='Gabinete' subtitulo='' rota='{{route('montagem', ['tipo' => 'final'])}}'>

                <select id='escolha' name='gabinete' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>

                <input id='nomeplacam' name='nomeplacam' type='hidden' value='{{$nomeplacam}}'>
                <input id='nomeprocessador' name='nomeprocessador' type='hidden' value='{{$nomeprocessador}}'>
                <input id='nomeram' name='nomeram' type='hidden' value='{{$nomeram}}'>
                <input id='nomeplacav' name='nomeplacav' type='hidden' value='{{$nomeplacav}}'>
                <input id='nomehd' name='nomehd' type='hidden' value='{{$nomehd}}'>
                <input id='nomefonte' name='nomefonte' type='hidden' value='{{$nomefonte}}'>

                
           </montagem-component>

           <p id='hardware' style='display: none;'>gabinete</p>
    </div>

@endsection

