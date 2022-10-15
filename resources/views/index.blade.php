@extends('layouts.index')
	
	

@section('content')
			<header> <!-- Inicio Topo -->

				<div class="fundo-logo d-flex justify-content-center ">
					<div class="align-self-center logo">
						<img src="img/logo.png" class="img">
					</div>
				</div>

			</header> <!-- Fim Topo -->

			<section id="carousel" data-interval= 2500 class="carousel slide" data-ride="carousel" >
					  
				<div class="carousel-inner">
					    
					<div class="carousel-item active img-carousel">
						<div  class="d-flex justify-content-center h-100">
							<div class="align-self-center">
								<h2 class="h2-carousel text-white  text-center ">Já teve levar seu pc na assistência ?</h2>
								<h3 class="h3-carousel text-white text-center">Imagine ter um suporte sem sair de casa</h3>
								<div class="d-flex justify-content-center mt-3">
									<a href='https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808483c69de90183c8c6db9a01cb' class="btn btn-danger text-center mx-auto btn-lg">Garanta já</a>
									
									


								</div>
							</div>
						</div>		
					</div>
						    
					<div class="carousel-item img-carousel-2">
						<div  class="d-flex justify-content-center h-100">	
							<div class="align-self-center">					    		
								<h2 class="h2-carousel text-white  text-center ">Uma plataforma acessivel e educacional</h2><br>
								<h3 class="h3-carousel text-white  text-center ">Suporte e conteúdo educacional sobre informática</h3>
								<div class="d-flex justify-content-center mt-3">
									<button class="btn btn-danger text-center mx-auto btn-lg">Garanta já</button>
								</div>
							</div> 
						</div>
					</div>

				</div>

				<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				   <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				   <span class="carousel-control-next-icon" aria-hidden="true"></span>
				   <span class="sr-only">Next</span>
				</a> <!-- Inicio Carousel -->
					  											
			</section> <!-- Fim Carousel -->

			<section id="video" class=" py-5">
				
				<div class="row  justify-content-center py-5 ">
					
						<div class="col-12 text-center mb-3">
							<h2 class="text-white h2-video">Veja nosso video !</h2>
						</div>	
					
						<div class="col-md-6 col-10 mx-auto" >
							<iframe width="100%" class="video" src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
						</div>

						<div class="col-10 text-center mx-auto mt-4">
							<form action="{{route('checkout')}}" method="POST">
								@csrf
								<!-- Add a hidden field with the lookup_key of your Price -->
								<input type="hidden" name="lookup_key" value="1LsdrDHCT0bYlJFqpniUjfkg" />
								<button class='btn btn-info' id="checkout-and-portal-button" type="submit">Checkout</button>
							</form>
							<br>
							<small class="text-white">Apenas 10 reais mensais</small>
						</div>
					
				</div> <!-- Inicio Video Principal -->

			</section> <!-- Fim Video Principal -->

			<section id="suporte" class="py-5">
				
				<div class="row">
					
					<div class="col-4 text-center text-white" >
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

				</div> <!-- Inicio Suporte -->

			</section> <!-- Fim Suporte -->

			<section id="feedback" class="py-5 ">
				
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

			<footer id="" class='my-2'> <!-- Inicio Rodape -->

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

	

		
	  