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
								<h2 class="h2-carousel text-white  text-center ">Já teve levar seu pc na assistência ?</h2>
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
								<h2 class="h2-carousel text-white  text-center ">Uma plataforma acessivel para celulares e dektop</h2>
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
					
						<div class="col-md-6 col-10 mx-auto" >
							<iframe width="100%" class="video" src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
						</div>

						<div class="col-10 text-center mx-auto mt-4">
							
							<?php if(isset(auth()->user()->assinatura) and auth()->user()->assinatura == 'premium') { ?>
								<h4 class='text-white' style='font-family: one;'>{{$msg}}</h4>
							<?php } else { ?>
								<a  href="{{route('assinar')}}"  class='btn btn-danger text-center mx-auto carousel-btn' id="checkout-and-portal-button" type="submit">Garanta sua vaga</a>
								<br>
								<small class='mt-2 text-white' Style='font-size: .9em; font-family: one;'>Faça login ou cria sua conta primeiro !</small>
							<?php } ?>
							
							

							
							
						</div>
					
				</div> <!-- Inicio Video Principal -->

			</section> <!-- Fim Video Principal -->

			<section id="suporte" class="py-5 anime js"> <!-- Inicio Suporte -->
				
				<div class="row anime js" id='garantia'>
					
					<h2 class='col-10 mx-auto text-center h2-duvida mb-5'>Nossas garantias</h2>

					<div class="col-4 text-center text-white " >
						<i class="fa-solid fa-hand-holding-dollar icon"></i>
						<p class="p-suporte">Experimente por 30 dias e caso não goste te reembolsamos !</p>
					</div>

					<div class="col-4 text-center text-white">
						<i class="fa-solid fa-shield icon"></i>
						<p class="p-suporte">Suporte e seguro total pra nossos assinantes</p>
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
						<p class="p-suporte">Nosso time de tecnicos vai estar disponivel 12 horas para lhe atender !</p>
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

					<div class="col-md-4 col-10 ">
						
					
						

						
					</div>

					<div class="offset-md-2 col-md-4 col-10">
					
							
						

						
					</div>
				
				</div> <!-- Inicio Feedback -->

			</section> <!-- Fim Feedback -->

			<footer id="rodape" class='my-2'> <!-- Inicio Rodape -->

				<div class="row align-items-center">
					<div class="col-6 offset-1  text-light">
						<p class=''>Copyright (c) 2022 Nkw tech <br> Todos os direitos reservados
						</p>
					</div>
					
					<div class="col-3 ms-auto ">
						<img src="img/logo.png" class="img-fluid">
					</div>

				</div>
				
			</footer> <!-- Fim Rodape -->
@endsection

	

		
	  