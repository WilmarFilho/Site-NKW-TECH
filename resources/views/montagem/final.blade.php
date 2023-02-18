@extends('layouts.bg_perfil')

@section('content')


    <div id='container' class='text-center text-white container mx-auto row justify-content-center'>

        <h2 class='h2-montagem'>Parabéns, você acaba de montar seu computador !</h2>
       

        <h3 class='mt-3 h3-montagem'>Placa mãe</h3>
        <p>{{$nomeplacam}}</p>
        
        <h3 class='h3-montagem'>Processador</h3>
        <p>{{$nomeprocessador}}</p>

        <h3 class='h3-montagem'>Memoria ram</h3>
        <p>{{$nomeram}}</p>

        @if($nomeplacav != null)
            <h3 class='h3-montagem'>Placa de video</h3>
            <p>{{$nomeplacav}}</p>
        @endif

        <h3 class='h3-montagem'>Armazenamento</h3>
        <p>{{$nomehd}}</p>

        <h3 class='h3-montagem'>Fonte</h3>
        <p>{{$nomefonte}}</p>

        <h3 class='h3-montagem'>Gabinete</h3>
        <p>{{$gabinete}}</p>


        <p class='p-final-montagem'>Seu pc vai custar em torno de {{$valor}}R$, compre diretamente na nossa loja, clique no botão abaixo e saiba mais!</p>
       <a class='btn btn-success' href='www.nkwstore.com'>Clique aqui</a>


           

    </div>

@endsection

