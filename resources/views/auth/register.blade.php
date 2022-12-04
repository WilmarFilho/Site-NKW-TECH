@extends('layouts.bg_foto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white">{{ __('Registrar') }}</div>

                <div class="card-body text-white">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label class='label-form'>Dados Cadastrais :</label>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder='Digite seu nome completo ' class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Digite seu endereço de email " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input placeholder='Digite sua senha' id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme sua senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder='Confirme a senha' type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <label class='label-form'>Dados de endereço :</label>
                        
                        <div class="row mb-3">
                            <label for="cidade" class="col-md-4 col-form-label text-md-end">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" placeholder='Digite sua cidade' type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>

                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                
                                <select id="estado" placeholder='Selecione seu estado'  class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('cidade') }}" required autocomplete="estado" autofocus>
                                
                                    <option>GO</option>
                                    <option>DF</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>RS</option>
                                    <option>SC</option>
                                    <option>PR</option>
                                    <option>SP</option>
                                    <option>RJ</option>
                                    <option>MG</option>
                                    <option>BA</option>
                                    <option>SE</option>
                                    <option>AL</option>
                                    <option>PE</option>
                                    <option>PB</option>
                                    <option>RN</option>
                                    <option>CE</option>
                                    <option>PI</option>
                                    <option>MA</option>
                                    <option>TO</option>
                                    <option>AP</option>
                                    <option>PA</option>
                                    <option>RR</option>
                                    <option>AM</option>
                                    <option>AC</option>
                                    <option>RO</option>
                                
                                </select>
                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="endereco" placeholder='Digite seu endereço completo' type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco" autofocus>

                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Setor') }}</label>

                            <div class="col-md-6">
                                <input id="setor" placeholder='Digite seu setor' type="text" class="form-control @error('setor') is-invalid @enderror" name="setor" value="{{ old('setor') }}" required autocomplete="setor" autofocus>

                                @error('setor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input placeholder='' id="celular" type="tel" class="form-control @error('celular') is-invalid @enderror" name="celular" value="" required autocomplete="celular" autofocus>

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-9">
                                <button type="submit" class="btn btn-outline-info">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
