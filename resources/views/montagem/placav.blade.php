@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
  
           <montagem-component titulo='Placa de Video' subtitulo='' rota='{{route('montagem', ['tipo' => 'hd'])}}'>

                <select id='escolha' name='placav' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>

                <input id='nomeplacam' name='nomeplacam' type='hidden' value='{{$nomeplacam}}'>
                <input id='nomeprocessador' name='nomeprocessador' type='hidden' value='{{$nomeprocessador}}'>
                <input id='nomeram' name='nomeram' type='hidden' value='{{$nomeram}}'>

                <input id='potencia' name='potencia' type='hidden' value=''>
                
                @if($integrado == 1)
                    <p style='' class='mt-2 text-warning'>Caso queira economizar e ter um pc mais básico não escolha esse componente pois seu processador já tem video integrado</p>
                @endif
           </montagem-component>

           <p id='hardware' style='display: none;'>placav</p>
    
    </div>

@endsection

