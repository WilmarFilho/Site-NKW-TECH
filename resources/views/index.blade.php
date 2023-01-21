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
			<header> <!-- Inicio Topo -->

				<div class="fundo-logo d-flex justify-content-center ">
					<div class="align-self-center logo">
						<img src="img/logo.png" class="img">
					</div>
				</div>

			</header> <!-- Fim Topo -->

			<div id="carousel" class="carousel slide anime js" data-bs-ride="carousel">
				<div class="carousel-inner">
					
					<div class="carousel-item active img-carousel">
						<div  class="d-flex justify-content-center h-100">
							<div class="align-self-center">
								<h2 class="h2-carousel text-white  text-center ">Já teve que levar seu pc <br>na assistência ?</h2>
								<h3 class="h3-carousel text-white text-center">Imagine ter um suporte sem sair de casa</h3>
								<div class="d-flex justify-content-center mt-3">
									<?php if(isset(auth()->user()->assinatura) and auth()->user()->assinatura == 'premium') { ?>
										<h4 class='text-danger' style='font-family: one;'>{{$msg}}</h4>
									<?php } else { ?>
										<a  href="{{route('assinar')}}" class="btn btn-danger text-center mx-auto carousel-btn">Garanta já</a>	
									<?php } ?>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="carousel-item img-carousel-2">
						<div  class="d-flex justify-content-center h-100">	
							<div class="align-self-center">					    		
								<h2 class="h2-carousel text-white  text-center ">Uma plataforma acessivel <br>para celulares e desktop</h2>
								<h3 class="h3-carousel text-white  text-center ">Suporte total sobre informática</h3>
								<div class="d-flex justify-content-center mt-3">
									<?php if(isset(auth()->user()->assinatura) and auth()->user()->assinatura == 'premium') { ?>
										<h4 class='text-warning' style='font-family: one;'>{{$msg}}</h4>
									<?php } else { ?>
										<a  href="{{route('assinar')}}" class="btn btn-danger text-center mx-auto carousel-btn">Garanta já</a>	
									<?php } ?>
								</div>
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

			<section id="video" class=" py-5 anime js">
				
				<div class="row  justify-content-center py-5 ">
					
						<div class="col-12 text-center mb-3">
							<h2 class="text-white h2-video">Veja nosso video !</h2>
						</div>	
					
						<div class="col-md-4 col-10 mx-auto" >
							<video class="video borda"  src='video/principal.mp4' controls >
                        
                            </video>	
						</div>

						<div class="col-10 text-center mx-auto mt-4">
							
							<?php if(isset(auth()->user()->assinatura) and auth()->user()->assinatura == 'premium') { ?>
								<h4 class='text-white' style='font-family: one;'>{{$msg}}</h4>
							<?php } else { ?>
								<a  href="{{route('assinar')}}"  class='btn btn-danger text-center mx-auto carousel-btn' id="checkout-and-portal-button" type="submit">Garanta sua vaga</a>
								<br>
								<small class='mt-2 text-white' Style='font-size: .9em; font-family: one;'>Faça login ou crie sua conta primeiro !</small>
							<?php } ?>
							
							

							
							
						</div>
					
				</div> <!-- Inicio Video Principal -->

			</section> <!-- Fim Video Principal -->

			<section id="suporte" class="py-5 anime js"> <!-- Inicio Suporte -->
				
				<div class="row anime js" id='garantia'>
					
					<h2 class='col-10 mx-auto text-center h2-duvida mb-5'>Nossas garantias</h2>

					<div class="col-4 text-center text-white " >
						<i class="fa-solid fa-hand-holding-dollar icon"></i>
						<p class="p-suporte">Experimente por 7 dias e caso não goste te reembolsamos !</p>
					</div>

					<div class="col-4 text-center text-white">
						<i class="fa-solid fa-shield icon"></i>
						<p class="p-suporte">Ambiente seguro para todos meios de pagamento</p>
					</div>

					<div class="col-4 text-center text-white">
						<i class="fa-solid fa-laptop-code icon"></i>
						<p class="p-suporte">Assistência total sem sair de casa !</p>
					</div>

				</div> s

				<div class='row anime js' id='duvida'>

					<h2 class='col-10 mx-auto text-center h2-duvida  mb-5'>Principais duvidas</h2>

					<div class='col-md-6  text-center  '>
						<h3 class='h3-duvida'>Vou ser atentido qualquer hora ?</h3>
						<p class="p-suporte">Nosso time de tecnicos irá lhe atender o mais rápido possível !</p>
					</div>

					<div class='col-md-6 text-center'>
						<h3 class='h3-duvida'>Também vou ter suporte presencial assinando a plataforma ?</h3>
						<p class="p-suporte">Sim, além do suporte online para serviços que necessitem de atendimento presencial nossos tecnicos vão até sua casa!</p>
					</div>

					<!--<div class='col-6 text-center'>
						<h3 class='h3-duvida'>pergunta</h3>
						<p class="p-suporte">tetetetettetete</p>
					</div>

					<div class='col-6 text-center'>
						<h3 class='h3-duvida'>Pergunta 1</h3>
						<p class="p-suporte">tetetetettetete</p>
					</div>-->
				
				</div>

			</section> <!-- Fim Suporte -->

			<section id="feedback" class="py-5  anime js">
				
				<div class="row my-5">
					<div class="col-12 text-center">
						<h2 class="text-white">Nosso trabalho </h2>
					</div>
				</div>

				<div class="row justify-content-center mt-5">
				
					<div class="col-md-4 col-10  mb-4 ">
                        <video class="borda"   src='video/cliente1.mp4' controls >
                        
                        </video>		
					</div>

					<div class=" offset-md-2 col-md-4 col-10  mb-4">
						
							<video class="borda"  src='video/cliente2.mp4' controls >
                        
                            </video>			
					</div>

					<div class="col-md-4 col-10 mb-4">
						
						<video class="borda"  src='video/cristian.mp4' controls >
                        
                        </video>
						

						
					</div>

					<div class="offset-md-2 col-md-4 col-10">
							
						<video class="borda"  src='video/cliente3.mp4' controls >
                        
                        </video>

						
					</div>
				
				</div> <!-- Inicio Feedback -->

			</section> <!-- Fim Feedback -->

			<section class='quem-somos row justify-content-center' id='sobre-nos'>

				<div class="col-12 text-center mt-5">
					<h2 class="text-white h2-video">Sobre nós !</h2>
				</div>	

				<div class="col-9  text-center mt-2">
					<p class="p-suporte">
						Fascinados por esse mundo de computadores e tecnologia desde cedo, nós somos jovens empresários do interior de Goiás prontos
						para revolucionar o Brasil no quesito de assistência e consultoria técnica.<br>
						Conheça um pouco mais de nós clicando no botão abaixo !
					</p>
					
					<a href='https://www.instagram.com/reel/Cm42v6Aq4Ds/?igshid=MDM4ZDc5MmU=' class='btn btn-outline-info btn-lg' style='font-family: beach;'>Saiba mais</a>
				</div>	

				<div class='row justify-content-center'>

					<img class='col-md-3 col-4 img-fluid' src={{asset('img/nattan.png')}}>

					<img class='col-md-3 col-4 img-fluid' src={{asset('img/kayky.png')}}>

					<img class='col-md-3 col-4 img-fluid' src={{asset('img/guizo.png')}}>

				</div>

				




			
			</section>

			<footer id="rodape" class=''> <!-- Inicio Rodape -->

				<div class="row align-items-center  py-4 text-center" style='border-bottom: 2px solid gray; font-family: one'>
					
					<div class=" col-md-4 col-12   text-light">
						<h4>Menu</h4>
						<ul class="navbar-nav nav-rodape ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#video">{{ __('Nossa Plataforma') }}</a> 
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#feedback">{{ __('Nossos clientes') }}</a> 
                                </li>
								<li class="nav-item ">
                                    <a class="nav-link" href="#sobre-nos">{{ __('Sobre nós') }}</a> 
                                </li>
                    	</ul>
					</div>
					
					<div class="col-md-4 col-12 text-white mt-2">
						<h4>Quem somos</h4>
						
						<p class='text-white-50'>
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
				
			</footer> <!-- Fim Rodape -->
@endsection

	

		
	  