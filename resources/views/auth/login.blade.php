@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-sm-12 d-flex justify-content-center">
    <h1 class="text-white"> Iniciar sesion en web</h1>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Mantener mi sesion iniciada en este equipo') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Iniciar sesión') }}
                                </button>





                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                            <div class="col-sm-12 d-flex justify-content-center mt-3">
                                <a href="http://login-php1.herokuapp.com/register">¿No tiene una cuenta?</a>
                            </div>

                            <div class="col-sm-12 d-flex justify-content-center mt-2">
                                <a href="#">Políticas de privacidad</a>
                            </div>

                            <div class="col-sm-12 d-flex justify-content-center mt-2">
                                <a href="#">Tiene algún problema con la autenticacion de 2 Factores?</a>



</div>
</div>
@endsection
