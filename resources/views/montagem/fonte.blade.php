@extends('layouts.bg_perfil')

@section('content')


    <div id='container' class='container mx-auto row justify-content-center'>
  
           <montagem-component titulo='Fonte' subtitulo='' rota='{{route('montagem', ['tipo' => 'gabinete'])}}'>

                <select id='escolha' name='fonte' class='form-control'>

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
                
           </montagem-component>

           <p id='hardware' style='display: none;'>fonte</p>
    
    </div>

@endsection

