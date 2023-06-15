@extends('layouts.bg_black')

@section('content')

<header>
    @if(auth()->user()->CODFUN == 2)
        <apresentacao-component titulo='Seja bem vindo'></apresentacao-component>
    @endif
    @if(auth()->user()->CODFUN == 1)
        <apresentacao-component titulo='{{auth()->user()->name}}'></apresentacao-component>
    @endif
</header>

<div class=" fundo py-5 row justify-content-center" >
      
            @php  auth()->user()->CODFUN == 1 ? $admin = '' : $admin = '';  @endphp

            @if(auth()->user()->ADMIN == 1)
                <formsimples-component route='/admin' classform='{{$admin}} col-md-3 col-9 mt-4' token_csrf='{{csrf_token()}}'  label='Trocar tela' labelbtn='Trocar' classbtn='btn btn-outline-info' classlabel='label-formulario' >
                    <select class='form-control' name='codfun'>
                        <option value='1'>Admin</option>
                        <option value='2'>Usuario</option>
                    </select>
                </formsimples-component>
            @endif

            @if(auth()->user()->CODFUN == 2)
                <div style='margin-right: 10px;border: 3px solid lightcyan; border-radius: 15px; padding-top: 12px' class='col-md-4 col-9 mt-4 text-center'>
                    <h2><a type='button' class='a_home_nav' href='{{route('adiciona')}}'>Abrir chamado</a>  <br>  <i class=" a_home_nav fa-solid fa-plus"></i></h2>
                </div>
            @endif
        
            <div style='border: 3px solid lightcyan; border-radius: 15px; padding-top: 12px' class='col-md-4 col-9 mt-4 text-center'>
                <h2><a class='a_home_nav' href='{{route('chamado.index')}}'>Ver @if(auth()->user()->CODFUN == 1) todos @endif chamados</a> <br> <i class="a_home_nav fa-solid fa-grip "></i></h2>    
            </div>    


    
</div>

<div class=' row  teste justify-content-center align-items-center anime js' style='height: 700px'>
    
        <div class='montagem col-10 text-center mt-3'>
            <h2 class='h2-montagem mt-4'>Quer ajuda pra montar seu pc ?</h2>
            <p class='p-montagem'>Acha dificil ou não tem nem ideia de onde começar para montar seu computador? <br>Deixe que nós te ajudamos nisso !!!</p>
            <a href="{{route('montagem', ['tipo' => 'placam'])}}" class='mb-3 btn btn-success'>Clique aqui</a>
        </div>

</div>

            <footer id="rodape" class=''> 

				<div class="row align-items-center  py-4 text-center" style='border-bottom: 2px solid gray; font-family: one'>
					
					<div class=" col-md-4 col-12   text-light">
						<h4>Menu</h4>
						<ul class="navbar-nav nav-rodape ">
								<li class="nav-item text-center">
                                    <a class="nav-link rolagem m-2" href="{{route('perfil')}}">{{ __('Perfil') }}</a> 
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link rolagem m-2" href="{{ route('ajuda') }}">{{ __('Ajuda AnyDesk') }}</a> 
                                </li>
								<li class="nav-item text-center">
                                    <a class="nav-link rolagem m-2" href="{{route('chamado.index')}}">{{ __('Chamados') }}</a> 
                                </li>
								<li class="nav-item ">
                                    <a class="nav-link m-2" href="{{route('montagem', ['tipo' => 'placam'])}}">{{ __('Montagem') }}</a> 
                                </li>
                    	</ul>
					</div>
					
					<div class="col-md-4 col-12 text-white mt-2">
						<h4>Suporte</h4>
						
						<p class='text-white-50 p-2'>
							Encontrou algum erro ou teve alguma dúvida? Relate no nosso email !
						</p>
                        <p class='text-white-50'>contato@nkwtech.com</p>

					</div>

					<div class="col-md-2 offset-md-1 col-12 ">
						<img src="img/geral/logo.png" class="img-fluid">
					</div>
				</div>
				
				<div class='row justify-content-center '>
					<div class="ml-2 mt-3 col-6   text-light text-center">
						<p class=''>Copyright (c) 2023 Nkw tech -  Todos os direitos reservados
						</p>
						<div class='mb-2'>
							<a href='https://www.instagram.com/nkw_tech/' class='btn btn-dark'><i class="fa-brands fa-instagram"></i></a>
							<a href='https://www.tiktok.com/@nkwtech' class='btn btn-dark m-1'><i class="fa-brands fa-tiktok"></i></a>
						</div>
					</div>

				</div>
				
			</footer> 

@endsection
