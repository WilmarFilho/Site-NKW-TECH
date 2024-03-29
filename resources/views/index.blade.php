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

			<!-- Inicio Topo -->
			<header> 

				<div class="fundo-logo d-flex justify-content-center ">
					<div class="align-self-center logo">
						<img src="img/logo.png" class="img">
					</div>
				</div>

			</header> 
			<!-- Fim Topo -->

			<!-- Inicio Carousel -->
			<div id="carousel" class="carousel slide d-md-block" data-bs-ride="carousel">
				<div class="carousel-inner">
					
					<div class="carousel-item active img-carousel">
						<div  class="d-flex justify-content-center h-100">
							<div class="align-self-center">
								<h2 class="h2-carousel text-white  text-center ">Já teve que levar seu pc <br>na assistência?</h2>
								<h3 class="h3-carousel text-white text-center">Imagine ter um suporte sem sair de casa</h3>
								
							</div>
						</div>	
					</div>
					
					<div class="carousel-item img-carousel-2">
						<div  class="d-flex justify-content-center h-100">	
							<div class="align-self-center">					    		
								<h2 class="h2-carousel text-white  text-center ">Uma plataforma acessivel <br>para celulares e desktop</h2>
								<h3 class="h3-carousel text-white  text-center ">Suporte total sobre informática</h3>
								
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
			
			<!-- Inicio Video Principal -->
			<div id="video" class='container-fluid'>
				
				<div class="row  justify-content-center  " style='margin-left: 0 !important;margin-right: 0 !important'>
					
						<div class="col-12 text-center mb-3">
							<h2 class="text-white h2-video">Diga adeus às noites perdidas procurando respostas <br>e economize dinheiro com nossa plataforma exclusiva !</h2>
						</div>	
					
						<div class="col-md-6 col-lg-5 col-9 mx-auto" >
							<iframe class='video video-p' width="560" height="315" src="https://www.youtube.com/embed/glAAj2FDUJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</div>

						<div class="col-md-8  text-center col-lg-8 col-11 mx-auto texto-video">
							<p class='p-video'>
								Você está cansado de perder tempo procurando respostas para suas dúvidas sobre computadores? 
								A nossa plataforma online é a solução para esse problema. 
								Com ela, você pode obter respostas precisas e rápidas para qualquer dúvida que você possa ter.
							</p>
							<p class='p-video'>
								Nossa plataforma é projetada para ser fácil de usar e acessível, para que qualquer pessoa possa obter respostas para suas perguntas. 
								Nós temos uma equipe de especialistas em computadores que estão disponíveis 24 horas por dia, 7 dias por semana, para garantir que você possa obter ajuda quando precisar.
							</p>
							<p class='p-video'>
								Não fique de fora dessa e pare de jogar seu tempo fora !!!
							</p>
						</div>

						<div class="col-10 text-center mx-auto mt-4">
							
							<?php if(isset(auth()->user()->assinatura) and auth()->user()->assinatura == 'premium') { ?>
								<h4 class='text-white' style='font-family: one;'>{{$msg}}</h4>
							<?php } else { ?>
								<a  href="{{route('assinar')}}"  class='mb-2 btn btn-success text-center mx-auto carousel-btn' id="checkout-and-portal-button" type="submit">Garanta sua vaga</a>
								<br>
								<small class='mt-5 text-white' Style='font-size: .9em; font-family: one;'>Faça login ou crie sua conta primeiro !</small>
							<?php } ?>
							
							

							
							
						</div>
					
				</div> <!-- Inicio Video Principal -->

			</div> 
			<!-- Fim Video Principal -->

			<!-- Inicio Reviews -->
			<div id="review" class="py-6"> 
				
				<div class="row mb-5" style='margin-left: 0 !important;margin-right: 0 !important'>
					<div class="col-12 text-center">
						<h2 class="h2-feedback text-white">Revolucionando o mercado </h2>
					</div>
				</div>

				<div class="row justify-content-center mt-5" style='margin-left: 0 !important;margin-right: 0 !important'>
				
					<!--<div class="col-md-4 col-6  mb-4 " style='padding-left: 20px; padding-right: 20px '>

                        <iframe class='borda' width="260" height="315" src="https://www.youtube.com/embed/rjTsS5OTGOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>	
					
					</div>

					<div class=" offset-md-2 col-md-4 col-6  mb-4" style='padding-left: 20px; padding-right: 20px '>
					
							<iframe class='borda' width="260" height="315" src="https://www.youtube.com/embed/H1MNDDL8md0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		
					
					</div>

					<div class="col-md-4 col-6 mb-4" style='padding-left: 20px; padding-right: 20px '>
						
						<iframe class='borda' width="560" height="315" src="https://www.youtube.com/embed/YkUSl6n8sN4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						
					</div>

					<div class="offset-md-2 col-md-4 col-6" style='padding-left: 20px; padding-right: 20px '>
							
						<iframe class='borda' width="560" height="315" src="https://www.youtube.com/embed/1qiyo1jABaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					</div>-->

					<div class="review col-10 row  my-5" style='margin-left: 0 !important;margin-right: 0 !important'>

						<div class='texto-review text-center flex-column  text-white col-md-6 col-12 d-flex align-items-center justify-content-center'> 
                        	
								<h3 class='desc-review'>"Indico a NKW para qualquer serviço ligado á computadores"</h3>
							
								<p class='nome-review'>Fernanda Martins - Proprietária da Philly's Idiomas</p>
								
								<img class='foto-review img-fluid col-4 col-md-2 justify-content-center' src={{asset('img/index/foto1.jpeg')}}>

						</div>

						<div class='row col-md-4 col-10 offset-1'> 
                        	<iframe class='borda' width="260" height="315" src="https://www.youtube.com/embed/rjTsS5OTGOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>	
						</div>

					</div>

					<div class='col-10 linha-review'></div>

					<div class="review col-10 row my-5" style='margin-left: 0 !important;margin-right: 0 !important'>

						<div class='texto-review text-center flex-column  text-white col-md-6 col-12 d-flex align-items-center justify-content-center'> 
                        	
								<h3 class='desc-review'>"A NKW simplesmente resolveu meu problema na hora que eu precisava, é uma empresa de responsabilidade na qual eu confiei meu notebook"</h3>
							
								<p class='nome-review'>Cristian Hernane - Influencer e Empresário</p>

								<img class='foto-review img-fluid col-4 col-md-2 justify-content-center' src={{asset('img/index/foto2.jpeg')}}>
							
						</div>
						
						<div class='row col-md-4 col-10 offset-1'>
                        	<iframe class='borda' width="260" height="315" src="https://www.youtube.com/embed/H1MNDDL8md0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		
						</div>

					</div>

					<div class='col-10 linha-review'></div>

					<div class="review col-10 row my-5" style='margin-left: 0 !important;margin-right: 0 !important'>

						<div class='texto-review text-center flex-column  text-white col-md-6 col-12 d-flex align-items-center justify-content-center'> 
                        	
								<h3 class='desc-review'>"O preço é ótimo, acesível para todos e o trabalho é maravilhoso"</h3>
							
								<p class='nome-review'>Ana Beatriz - Graduada em letras</p>

								<img class='foto-review img-fluid col-4 col-md-2 justify-content-center' src={{asset('img/index/foto3.jpeg')}}>
							
						</div>

						<div class='row col-md-4 col-10 offset-1'> 
                        	<iframe class='borda' width="560" height="315" src="https://www.youtube.com/embed/YkUSl6n8sN4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</div>

					</div>
					
					<div class='col-10 linha-review'></div>

					<div class="review col-10 row my-5" style='margin-left: 0 !important;margin-right: 0 !important'>

						<div class='texto-review text-center flex-column  text-white col-md-6 col-12 d-flex align-items-center justify-content-center'> 
                        	
							<h3 class='desc-review'>"Eles resolveram meu problema em 20 minutos"</h3>
							
							<p class='nome-review'>Vitória - Estudante</p>

							<img class='foto-review img-fluid col-4 col-md-2 justify-content-center' src={{asset('img/index/foto4.jpeg')}}>
							
						</div>
						
						<div class='row col-md-4 col-10 offset-1'> 
                        	<iframe class='borda col-12' width="560" height="215" src="https://www.youtube.com/embed/1qiyo1jABaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</div>

					</div>

					<div class='col-10 linha-review'></div>

				</div>

			</div> 
			<!-- Fim Reviews -->

			<!-- Inicio Sobre Nós -->
			<div id="sobreNos" class="pt-6 row justify-content-center " style='margin-left: 0 !important;margin-right: 0 !important'>
				
				<!--<div class="col-12 text-center">
					<h2 class="text-white h2-sobre-nos">Contato direto com <br>os fundadores !</h2>
				</div>	

				<div class="col-9  text-center mt-2">
					<p class="p-sobre-nos">
						Fascinados por esse mundo de computadores e tecnologia desde cedo, nós somos jovens empresários do interior de Goiás prontos
						para revolucionar o Brasil no quesito de assistência e consultoria técnica.<br>
						Conheça um pouco mais de nós clicando no botão abaixo !
					</p>
					
					<a href='https://www.instagram.com/reel/Cm42v6Aq4Ds/?igshid=MDM4ZDc5MmU=' class='btn btn-danger btn-size mb-4' style='font-family: beach;'>Saiba mais</a>
				</div>	-->

				<div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center  text-center mt-2 row" style='margin-left: 0 !important;margin-right: 0 !important'>

					<h2 class="text-white h2-sobre-nos">Contato direto com <br>os fundadores !</h2>
				
					<p class="p-sobre-nos">
						Fascinados por esse mundo de computadores e tecnologia desde cedo, nós somos jovens empresários do interior de Goiás prontos
						para revolucionar o Brasil no quesito de assistência e consultoria técnica.
						Conheça um pouco mais de nós clicando no botão abaixo !
					</p>
					
					<a href='https://www.instagram.com/reel/Cm42v6Aq4Ds/?igshid=MDM4ZDc5MmU=' class='btn btn-danger btn-size mb-4 col-6' style='font-family: beach;'>Saiba mais</a>
				</div>

				<div class='col-12 col-md-6 row justify-content-center mt-3' style='margin-left: 0 !important;margin-right: 0 !important'>

					<img class='col-md-12 col-12 img-fluid' src={{asset('img/index/sobre.png')}}>

				</div>
				 <!-- Inicio Feedback -->

			</div>
			<!-- Fim Sobre Nós -->

			<!-- Inicio Rodape -->
			<footer id="rodape" class=''> 

				<div class="row align-items-center  py-4 text-center" style='border-bottom: 2px solid gray; font-family: one;margin-left: 0 !important;margin-right: 0 !important'>
					
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
						<img src="img/geral/logo.png" class="img-fluid">
					</div>
				</div>
				
				<div class='row justify-content-center ' style='margin-left: 0 !important;margin-right: 0 !important'>
					<div class="ml-2 mt-3 col-6   text-light text-center">
						<p class=''>Copyright (c) 2023 Nkw tech -  Todos os direitos reservados
						</p>
						<p>contato@nkwtech.com</p>
						<div class='mb-2'>
							<a href='https://www.instagram.com/nkw_tech/' class='btn btn-light'><i class="fa-brands fa-instagram"></i></a>
							<a href='https://www.tiktok.com/@nkwtech' class='btn btn-light m-1'><i class="fa-brands fa-tiktok"></i></a>
						</div>
					</div>

				</div>
				
			</footer> 
			<!-- Fim Rodape -->
@endsection

	

		
	  