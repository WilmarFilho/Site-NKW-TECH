
@extends('layouts.bg_foto')


@section('content')

    <div class='container'>
    
        <div class='text-center row justify-content-center'>
            
            <button id='btn-filtro' class='btn btn-outline-light btn-block col-4 label-filtro' type='button' data-toggle='collapse' data-target='#filtro'> Filtro  <i class="fa-solid fa-filter"></i> </button>
        
            <div class='collapse row  mt-4 justify-content-center' id='filtro'>
                <formsimples-component classform='col-md-5 col-10 form-inline' route="{{route('filtro')}}"token_csrf='{{csrf_token()}}' label='Selecione o status de chamado para a consulta' ibtn='fa-solid fa-magnifying-glass' labelbtn='Procurar' classbtn='btn btn-danger' classlabel='label-form'>
                    <select name='filtro' class='form-control'>
                        <option >Todos</option>
                        <option >Pendente</option>
                        <option>Andamento</option>
                        <option>Finalizado</option>
                    </select>
                </formsimples-component>
            </div>
        
        </div>  

    @foreach($chamados as $indice => $chamado)
        <chamados-component id={{$chamado->id}}  tipo={{$chamado->tipo_serviço}}  status=<?=$chamado->status?> >
           
            @php 
                $dataHora = explode(" ",$chamado->created_at);
                
                $data = explode("-", $dataHora[0]);
                $data = $data[2] . '/' . $data[1] . '/' . $data[0];
                
                $hora = explode(":", $dataHora[1]);
                $hora = $hora[0] . ':' . $hora[1];
            @endphp


            <template v-slot:data> 
                <h5 id='data-hora' class="ms-auto me-4 mt-2">{{$data}}-{{$hora}} </h5>
            </template>

            <template v-slot:tipo> 
                <h5 class="card-header text-center titulo-chamado">{{$chamado->tipo_serviço}}</h5>
            </template>

            @if(auth()->user()->CODFUN == 1)
                <template v-slot:usuario> 
                    <p class="card-text usuario-chamado">Usuario: {{$chamado->User->name}}</p>
                </template>
            @endif
            
            <template v-slot:descricao> 
                <p class="card-text texto-chamado mt-3">{{$chamado->descricao}}</p>
            </template>

             <template v-slot:button> 
                <a href={{route('chamado.show', $chamado)}} class="btn btn-danger">Ver Chamado</a>
            </template>

        </chamados-component>

            <modal-component id={{$chamado->id}} titulo='Deseja mesmo remover o chamado ?' botao='btn-outline-dark'>

                <form method='POST' action={{route('chamado.destroy', $chamado)}}>
                    @csrf
                    @method('DELETE')
                    <button class='btn btn-danger btn-lg' type='submit'>Apagar <i class="fa-regular fa-trash-can"></i></button>
                </form>
     
            </modal-component>

     @endforeach

    <div>
      
         {{$chamados->links()}}
       
    </div>

    <home-component route="{{route('home')}}"> </home-component>

@endsection