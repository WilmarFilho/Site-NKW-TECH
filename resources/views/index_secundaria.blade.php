<?php
									
	if(isset(auth()->user()->name)) {

		if(auth()->user()->assinatura == 'premium') {
			$msg = 'Você já é nosso assinante';
		}
		else {
			$msg = '';
		}
											
	}

	else {
		$msg = '';
	}
									
?>

@extends('layouts.index')
	
	

@section('content')

			<!-- Inicio Carousel -->
			<div id="carousel" class="carousel slide " style='margin-top: 5rem' data-bs-ride="carousel">
				<div class="carousel-inner">
					
					<div class="carousel-item active img-carousel">
						<div  class="d-flex justify-content-center h-100">
							<div class="align-self-center">
								<h2 class="h2-carousel text-white  text-center ">Conheça todos nossos  <br>serviços!</h2>
								<h3 class="h3-carousel text-white text-center">Garanta descontos em todos eles.</h3>
							</div>
						</div>	
					</div>
					
					<div class="carousel-item img-carousel-2">
						<div  class="d-flex justify-content-center h-100">	
							<div class="align-self-center">					    		
								<h2 class="h2-carousel text-white  text-center ">Já quis uma <br>limpeza preventiva no pc?</h2>
								<h3 class="h3-carousel text-white  text-center ">Ou ficou com dúvida sobre algo?</h3>
								
							</div> 
						</div>	
					</div>

					<div class="carousel-item active img-carousel">
						<div  class="d-flex justify-content-center h-100">
							<div class="align-self-center">
								<h2 class="h2-carousel text-white  text-center ">Já precisou ativar o Oficce <br>ou Windows?</h2>
								<h3 class="h3-carousel text-white text-center">Damos suporte presencial em nossa região e remotamente em todo o Brasil.</h3>
							</div>
						</div>	
					</div>

					<div class="carousel-item img-carousel-2">
						<div  class="d-flex justify-content-center h-100">	
							<div class="align-self-center">					    		
								<h2 class="h2-carousel text-white  text-center ">Pagou caro pra alguém <br>montar seu pc?</h2>
								<h3 class="h3-carousel text-white  text-center ">Aqui você não vai pagar mais!</h3>
								
							</div> 
						</div>	
					</div>
					
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div> 
			<!-- Fim Carousel -->  		

			<!-- Inicio duvidas -->
			<section class='quem-somos    py-4  ' id='duvidas'> <!-- Inicio Suporte -->

				<div class="row anime js justify-content-center" id='garantia'>
					
					<h2 class='col-10 mx-auto text-center h2-duvida mb-5'>Garantimos seu bem estar</h2>

					<div class="col-md-4 col-6 text-center text-white " >
						<i class="fa-solid fa-hand-holding-dollar icon"></i>
						<p class="p-suporte">Experimente por 7 dias e caso não goste te reembolsamos!</p>
					</div>

					<div class="col-md-4 col-6 text-center text-white">
						<i class="fa-solid fa-shield icon"></i>
						<p class="p-suporte">Ambiente seguro para todos meios de pagamento</p>
					</div>

					<div class="col-md-4 col-6 text-center text-white">
						<i class="fa-solid fa-laptop-code icon"></i>
						<p class="p-suporte">Assistência total sem sair de casa!</p>
					</div>

				</div> 

				<div class='row anime js justify-content-between' id='duvida'>

					<h2 class='col-10 mx-auto text-center h2-duvida'>Principais duvidas</h2>

					<div class='col-md-5  text-center  mt-5'>
						<h3 class='h3-duvida'>Vou ser atentido <br>qualquer hora?</h3>
						<p class="p-suporte">Nosso time de tecnicos irá lhe <br>atender o mais rápido possível !</p>
					</div>

					<div class='col-md-5 text-center mt-5' >
						<h3 class='h3-duvida'>Também vou ter suporte presencial assinando a plataforma?</h3>
						<p class="p-suporte">Sim, além do suporte online para serviços que necessitem de atendimento presencial nossos tecnicos vão até sua casa!</p>
					</div>

				
				</div>

                <div class='row justify-content-center'>
                
                    <a class='btn btn-success col-9 col-md-2' href='{{route('index')}}'> Ver video principal !!!</a>
                
                </div>
			
			</section> 
			<!-- Fim duvidas -->					
			
			

			<!-- Inicio Rodape -->
			<footer id="rodape" class=''> 

				<div class="row align-items-center  py-4 text-center" style='border-bottom: 2px solid gray; font-family: one'>
					
					<div class=" col-md-4 col-12   text-light">
						<h4>Menu</h4>
						<ul class="navbar-nav nav-rodape ">
								<li class="nav-item text-center">
                                    <a class="nav-link rolagem" href="{{route('index')}}">{{ __('Home') }}</a> 
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link rolagem" href="#review">{{ __('Nossos clientes') }}</a> 
                                </li>
								<li class="nav-item text-center">
                                    <a class="nav-link rolagem" href="#sobreNos">{{ __('Sobre nós') }}</a> 
                                </li>
								<li class="nav-item ">
                                    <a class="nav-link" href="{{route('pagina')}}">{{ __('Duvidas e Garantias') }}</a> 
                                </li>
                    	</ul>
					</div>
					
					<div class="col-md-4 col-12 text-white mt-2">
						<h4>Quem somos</h4>
						
						<p class='text-white-50 p-2'>
							Nós tivemos a idéia de criar uma startup para ajudar as pessoas de qualquer
							idade, temos o intuito de simplificar a vida dessas pessoas
							que acham que computadores, tecnologia e etc um bicho de 7 cabeças !
						</p>

					</div>

					<div class="col-md-2 offset-md-1 col-12 ">
						<img src="img/logo.png" class="img-fluid">
					</div>
				</div>
				
				<div class='row justify-content-center '>
					<div class="ml-2 mt-3 col-6   text-light text-center">
						<p class=''>Copyright (c) 2023 Nkw tech -  Todos os direitos reservados
						</p>
						<div class='mb-2'>
							<a href='https://www.instagram.com/nkw_tech/' class='btn btn-light'><i class="fa-brands fa-instagram"></i></a>
							<a href='https://www.tiktok.com/@nkwtech' class='btn btn-light m-1'><i class="fa-brands fa-tiktok"></i></a>
						</div>
					</div>

				</div>
				
			</footer> 
			<!-- Fim Rodape -->
@endsection

	

		
	  