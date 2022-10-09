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

<div class="container">
    <div class="row justify-content-center" >    
            @if(auth()->user()->CODFUN == 2)
                <div class='col-4 text-center'>
                    <h2><a type='button' class='a_home_nav' href='{{route('adiciona')}}'>Abrir chamado</a>  <br>  <i class=" a_home_nav fa-solid fa-plus"></i></h2>
                </div>
            @endif
        
            <div class='col-4 text-center'>
                <h2><a class='a_home_nav' href='{{route('chamado.index')}}'>Ver @if(auth()->user()->CODFUN == 1) todos @endif chamados</a> <br> <i class="a_home_nav fa-solid fa-grip "></i></h2>    
            </div>    

            @php  auth()->user()->CODFUN == 1 ? $admin = 'offset-2' : $admin = '';  @endphp

            @if(auth()->user()->ADMIN == 1)
                <form class="{{$admin}} col-4" action="/admin" method="POST">
                    @csrf
                    <label class='label-formulario'>Trocar tela:</label>
                    <div class='input-group'>
                        <select class='form-control' name='codfun'>
                            <option value='1'>Admin</option>
                            <option value='2'>Usuario</option>
                        </select>
                        <button type='submit' class='btn btn-outline-info'>Trocar</button>
                    </div>
                </form>
            @endif

    </div>
</div>

@endsection
