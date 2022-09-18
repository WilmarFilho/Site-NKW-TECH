
@extends('layouts.bg_foto')


@section('content')

    <div class='container'>
    
   

   
        <chamados-component id={{$chamado->id}}  tipo={{$chamado->tipo_serviço}}  status=<?=$chamado->status?> >
           
            @php 
                $dataHora = explode(" ",$chamado->created_at);
                
                $data = explode("-", $dataHora[0]);
                $data = $data[2] . '/' . $data[1] . '/' . $data[0];
                
                $hora = explode(":", $dataHora[1]);
                $hora = $hora[0] . ':' . $hora[1];
            @endphp


            <template v-slot:data> 
                <h5 class="ms-auto me-4 mt-1">{{$data}}-{{$hora}} </h5>
            </template>
            
            <template v-slot:descricao> 
                <p class="card-text texto-chamado">{{$chamado->descricao}}</p>
            </template>

             <template v-slot:button> 
                <a href={{route('chamado.show', $chamado)}} class="btn btn-danger">Ver Chamado</a>
            </template>

        </chamados-component>

   


     <div id='home'>

        <a href={{route('home')}}><i class="fa-solid fa-house fa-2x"></i> </a>
     
     </div>

    </div>

@endsection