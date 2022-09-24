
@extends('layouts.bg_foto')


@section('content')

    <div class='container-fluid'>

            @php 

               $img_urn =  'storage/' . $chamado->img_descricao;
               

                $status = 'btn-warning';
                if($chamado->status == 'Andamento') {
                    $status = 'btn-info';
                };
                 if($chamado->status == 'Finalizado') {
                    $status = 'btn-success';
                };

                $dataHora = explode(" ",$chamado->created_at);
                
                $data = explode("-", $dataHora[0]);
                $data = $data[2] . '/' . $data[1] . '/' . $data[0];
                
                $hora = explode(":", $dataHora[1]);
                $hora = $hora[0] . ':' . $hora[1];
            @endphp

            <div class="card text-white my-4">
                <h5 class="card-header text-center titulo-chat">Chat do chamado</h5>
                
                <div class="card-body row" id="chat">

                    <div class='col-12 row mb-3 mt-1 '>
                        <div class='offset-8 col-4 text-center resposta p-3'>
                            
                            <div class=''>
                                <span class='user-resposta'>{{auth()->user()->name}} </span>   <br>
                                <small class='data-resposta'>{{$data}}-{{$hora}}</small>
                            </div>
                            <div class=''>
                                <p class='texto-resposta'>{{$chamado->descricao}} </p>   
                            </div>
                        </div>
                    </div>
                    
                
                    @foreach($respostas as $indice => $reposta)
                        
                         @php 
                            
                            $class_resposta = 'ms-3';
                            if($reposta->user_id == 2) {
                                $class_resposta = 'offset-8';
                            }

                            $dataHora = explode(" ",$reposta->created_at);
                            
                            $data = explode("-", $dataHora[0]);
                            $data = $data[2] . '/' . $data[1] . '/' . $data[0];
                            
                            $hora = explode(":", $dataHora[1]);
                            $hora = $hora[0] . ':' . $hora[1];
                        @endphp

                        <div class='col-12 row mb-3 mt-1 '>
                            <div class=' {{$class_resposta}} col-4 text-center resposta p-3'>
                                
                                <div class=''>
                                    <span class='user-resposta'>{{auth()->user()->name}} </span>   <br>
                                    <small class='data-resposta'>{{$data}}-{{$hora}}</small>
                                </div>
                                <div class=''>
                                    <p class='texto-resposta'>{{$reposta->resposta}} </p>   
                                </div>
                            </div>
                        </div>
                    
                    @endforeach
                    
                   


                </div>

                <form method='POST' class='m-1' action='{{route('chat.store')}}'> 
                    @csrf

                        <div class='input-group'>
                            <input type='hidden' name='chamado' value='{{$chamado->id}}'>
                            <input name='resposta' type='text' class='form-control'>
                            <button type='submit' class='btn btn-info'>Enviar</button>
                        </div>
                </form>

            </div>
    
           <div class="card text-white my-4">
                <h5 class="card-header text-center titulo-detalhes">Detalhes</h5>
                
                <div class="card-body">
                   
                   <div class='row text-center'>
                        <div class='col-4'>
                            <h3 class='label-chamado'>Tipo do chamado</h3>
                            <span class='detalhes'>{{$chamado->tipo_serviço}}</span>
                        </div>

                        <div class='col-4'>
                            <h3 class='label-chamado'>Data de abertura do chamado</h3>
                            <span class='detalhes'>{{$data}}-{{$hora}}</span>
                        </div>

                        <div class='col-4'>
                            <h3 class='label-chamado'>Status do chamado</h3>
                            <span class='btn {{$status}} btn-sm'>{{$chamado->status}}</span>
                        </div>
                   </div>
                        
                    
                </div>
            </div>

            <div class="card text-white my-4">
                <h5 class="card-header text-center titulo-detalhes">Anexo</h5>
                
                <div class="card-body">
                   
                   <div class='row text-center justify-content-center'>
                        <div class='col-8'>
                            @if($chamado->img_descricao == 'noimage')
                                <span>Este chamado não possui anexos</span>
                            @else
                                <img src='{{asset($img_urn)}}' class='img-fluid'>
                            @endif
                        </div>

                   </div>
                        
                    
                </div>
            </div>

   
       
   


     

    </div>

@endsection