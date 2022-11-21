
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

            @if(auth()->user()->ADMIN == 1)
                <div class="">

                    <form class='mx-auto my-4 ' action='{{route('chamado.update', ['chamado' => $chamado])}}' method='POST'>
                        @csrf
                        @method('PUT')
                        <label class='label-form'> Alterar status do chamado: </label>
                        
                        <div class='input-group'>
                            <select name='status' class='form-control'>
                                <option>Andamento</option>
                                <option>Finalizado</option>
                                <option>Pendente</option>
                            </select>
                            <button class='btn btn-info'>Alterar</button>
                        </div>
                    
                    </form>

                </div>
            @endif

            <div class="card text-white my-4">
                <h5 class="card-header text-center titulo-chat">Chat do chamado</h5>
                
                <div class="card-body row" id="chat">

                    <div class='col-12 row mb-3 mt-1 '>
                        <div class='offset-md-8 col-md-4 offset-6 col-6 text-center resposta p-3'>
                            
                            <div class=''>
                                <span class='user-resposta'>{{$chamado->User->name}} </span>   <br>
                                <small class='data-resposta'>{{$data}}-{{$hora}}</small>
                            </div>
                            <div class=''>
                                <p class='texto-resposta'>{{$chamado->descricao}} </p>   
                            </div>
                        </div>
                    </div>
                    
                   

                    @foreach($respostas as $indice => $reposta)
                        
                         @php 
                            
                            $img = 'storage/' . $reposta->imagem;

                            $class_resposta = 'ms-3';
                            if($reposta->User->ADMIN == 0) {
                                $class_resposta = 'offset-md-8 offset-6';
                            }

                            $dataHora = explode(" ",$reposta->created_at);
                            
                            $data = explode("-", $dataHora[0]);
                            $data = $data[2] . '/' . $data[1] . '/' . $data[0];
                            
                            $hora = explode(":", $dataHora[1]);
                            $hora = $hora[0] . ':' . $hora[1];
                        @endphp

                        <div class='col-12 row mb-3 mt-1 '>
                            <div class=' {{$class_resposta}} col-md-4 col-6 text-center resposta p-3'>
                                
                                <div class=''>
                                    <span class='user-resposta'>{{$reposta->User->name}} </span>   <br>
                                    <small class='data-resposta'>{{$data}}-{{$hora}}</small>
                                </div>
                                <div class=''>
                                    <p class='texto-resposta'>{{$reposta->resposta}} </p>   
                                    <img class='img-fluid' src='{{asset($img)}}'>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach
                    
                   


                </div>

                <formsimples-component 
                    token_csrf='{{csrf_token()}}' 
                    classbtn='btn btn-info' 
                    labelbtn='Enviar'
                    classform='m-1'
                    route='{{route('chat.store')}}'
                    enctype='multipart/form-data'>
                    
                    <input type='hidden' name='chamado' value='{{$chamado->id}}'>
                    <input name='resposta' type='text' class='form-control'>
                    <input name='imagem' type='file' class='form-control' accept='.jpg,.png'>
                </formsimples-component>

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