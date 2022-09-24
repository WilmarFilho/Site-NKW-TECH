@extends('layouts.bg_black')

@section('content')

<header>
         <apresentacao-component></apresentacao-component>
</header>

<div class="container">
    <div class="row justify-content-center" >    
         <div class='col-4 text-center'>
            <h2><a type='button' class='a_home_nav' href='{{route('adiciona')}}'>Abrir chamado</a>  <br>  <i class=" a_home_nav fa-solid fa-plus"></i></h2>
         
         </div>

        <div class='col-4 text-center'>
            <h2><a class='a_home_nav' href='{{route('chamado.index')}}'>Ver chamados</a> <br> <i class="a_home_nav fa-solid fa-grip "></i></h2>
            
         </div>     
    </div>

 
   
</div>

@endsection
