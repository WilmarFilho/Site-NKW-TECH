@extends('layouts.bg_perfil')

@section('content')

    <div id='container' class='container mx-auto row justify-content-center'>
        
        <h1 class='text-center  label-perfil'>Saiba como baixar e usar o AnyDesk</h2>
        <h2 class='text-center  label-perfil'>Usamos este aplicativo para acessar seu computador remotamente e resolvermos sua dúvida !</h2>

        <h3 class='mt-5 label-form' style='font-size: 1.4em !important;'>1 - Acesse o site <a class='text-danger' href='https://anydesk.com/pt'>anydesk.com</a></h3> 
        <img style='border-radius: 45px;' class='mt-3' src='{{asset('img/anydesk.png')}}'>
        <h3 class='label-form mt-3' style='font-size: 1.4em !important;'>2- Clique em baixar agora, escolha o local de instalação e seu dowload será iniciado.</h3>
        <h3 class=' label-form mt-3' style='font-size: 1.4em !important;'>3 - Vá ate onde você instalou o anydesk e inicie o aplicativo</h3>
        <h3 class='label-form mt-3' style='font-size: 1.4em !important;'>4 - Informe o número do seu dispositivo para no nosso técnico no chat do chamado e acessaremos sua máquina !</h3>
        <img style='border-radius: 45px;' class='mt-3' src='{{asset('img/anydesk1.png')}}'>
           
    
    </div>

@endsection