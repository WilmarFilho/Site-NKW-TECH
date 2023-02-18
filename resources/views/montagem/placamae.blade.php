@extends('layouts.bg_perfil')

@section('content')

    

    <div id='container' class='container mx-auto row justify-content-center'>
  
           <montagem-component titulo='Placa Mãe' subtitulo='Principal componente de um computador, demanda quais vão ser todos outros' rota='{{route('montagem', ['tipo' => 'processador'])}}'>

                <select id='escolha' name='placam' class='form-control'>

                            <option></option>
                       
                       <?php foreach($produto as $indice => $produto) { ?>

                            <option>{{$produto->nome}}</option>

                       <?php } ?>
                       
                </select>

                <input id='socket' name='socket' type='hidden' value=''>
                <input id='ddr' name='ddr' type='hidden' value=''>
                
           </montagem-component>

           <p id='hardware' style='display: none;'>placam</p>
    
    </div>

@endsection


