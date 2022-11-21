@extends('layouts.bg_foto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white">
                <div class="card-header">{{ __('Verifique seu email !') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Outro email de verificação foi enviado.') }}
                        </div>
                    @endif

                    {{ __('Verifique seu email para ter acesso ao nosso sistema !') }}
                    {{ __('Caso não tenha recebido o email clique aqui : ') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para receber outro email ') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
