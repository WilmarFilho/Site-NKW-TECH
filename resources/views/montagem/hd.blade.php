@extends('layouts.bg_perfil')

@section('content')


    <div id='container' class='container mx-auto row justify-content-center'>
  
           <montagem-component titulo='Armazenamento' subtitulo='' rota='{{route('montagem', ['tipo' => 'fonte'])}}'>

                <select id='escolha' name='hd' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>

                <input id='nomeplacam' name='nomeplacam' type='hidden' value='{{$nomeplacam}}'>
                <input id='nomeprocessador' name='nomeprocessador' type='hidden' value='{{$nomeprocessador}}'>
                <input id='nomeram' name='nomeram' type='hidden' value='{{$nomeram}}'>
                <input id='nomeplacav' name='nomeplacav' type='hidden' value='{{$nomeplacav}}'>
                <input id='npotencia' name='npotencia' type='hidden' value='{{$npotencia}}'>
                
           </montagem-component>

           <p id='hardware' style='display: none;'>hd</p>
    
    </div>

@endsection

