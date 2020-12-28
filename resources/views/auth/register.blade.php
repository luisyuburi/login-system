@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1 class="text-white"> Cree su cuenta</h1>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <div class="card">


                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="firstname" placeholder="Nombre">
                                    </div>
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control" name="lastname" placeholder="Apellidos">
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Elegir contraseña"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-3">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">Certifico que soy mayor de 18
                                                años y acepto el <a href="#" class="text-dark"><u>Contrato de
                                                        Usuario</u></a> y las <a href="#" class="text-dark"><u>Politicas de
                                                        privacidad</u></a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0 text-center">

                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Crear cuenta') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center mt-3">
                    <p class="text-white"><a href="http://login-php1.herokuapp.com/login"><u>Iniciar sesion</u></a> con mi cuenta
                        existente</p>
                </div>

                <div class="col-sm-12 d-flex justify-content-center ">
                    <p class="text-white"><a href="http://login-php1.herokuapp.com/register"><u>Registrarse</u></a> con una cuenta de
                        empresa</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
