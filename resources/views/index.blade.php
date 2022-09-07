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
									<button class="btn btn-danger text-center mx-auto btn-lg">Garanta já</button>
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
							<button class="btn btn-danger btn-lg">Garanta sua vaga agora</button> <br>
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
						<p class="p-suporte">Conteudos educativos sem pagar nada !</p>
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
						
						
							<iframe  class="borda" width="100%"  height="250"  src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						

						

					</div>

					<div class=" offset-md-2 col-md-4 col-10  mb-4">
						
							<iframe class="borda"  width="100%"  height="250"  src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					

						
					</div>

					<div class="col-md-4 col-10 ">
						
							<iframe class="borda"  width="100%"  height="250"  src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						

						
					</div>

					<div class="offset-md-2 col-md-4 col-10">
					
							<iframe class="borda" width="100%"  height="250"  src="https://www.youtube.com/embed/sNNBaUuvjVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						

						
					</div>
				
				</div> <!-- Inicio Feedback -->

			</section> <!-- Fim Feedback -->

			<footer id="rodape"> <!-- Inicio Rodape -->

				<div class="row">
					<div class="col-6 mr-auto ml-3 mt-5 text-white">
						<p>Copyright (c) 2003 Company Name
								All Rights Reserved
								 
								

						</p>
					</div>
					
					<div class="col-3 ml-auto mt-5">
						<img src="imagens/logo.png" class="img-fluid">
					</div>

				</div>
				
			</footer> <!-- Fim Rodape -->
@endsection

	

		
	  