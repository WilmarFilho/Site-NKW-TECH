@extends('layouts.bg_foto')

@section('content')



<div class=" row">

    <div id='card-principal' class='col-md-6 col-10 mx-auto d-flex flex-column'>

        <div class='text-center'>
            <h2 class='h2-assinatura'>PLATAFORMA</h2>
            <img src='img/logo.png' class='img-fluid'>
        </div>

        <div id='lista-asssinatura' class='text-center'>
            <h3 class='h3-assinatura'>Nossos beneficios :<h3>
            <ul class='text-white mt-4' style='list-style: none'>
                <li class='li-assinatura'>- Atendimento online para problemas gerais de computadores </li>
                <li class='li-assinatura'>- Atendimento presencial </li>
                <li class='li-assinatura'>- Suporte o mais rápido possível </li>
                <li class='li-assinatura'>- Buscamos e entregamos</li>
                <li class='li-assinatura'>- Desconto em serviços presenciais</li>
            </ul>
        </div>

        <div class='text-center mt-4'>
            <form action="{{route('checkout')}}" method="POST">
                @csrf
                <!-- Add a hidden field with the lookup_key of your Price -->
                <input type="hidden" name="lookup_key" value="1LsdrDHCT0bYlJFqpniUjfkg" />
                <button class='btn btn-danger text-center mx-auto carousel-btn' id="checkout-and-portal-button" type="submit">Garanta sua vaga</button>
            </form>
        </div>
    
    </div>


</div>

@endsection
