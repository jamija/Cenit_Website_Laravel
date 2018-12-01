@extends('layouts.default')

@section ('title', 'cenit')

@section ('main-Section-class')

@section ('main-section-content')

<div class="container-page">

    <!-- side Image -->
      <div class="container-img">
            <img src="images/page-img/aquarium-01.jpg"	class="page-img">
      </div>
    <!-- End side Image -->

    <!-- Login-Form -->
    <div class="container-form">
        <!-- form header -->
        <div class="form-header">
          <h2>{{ __('Logueate') }}</h2>

        </div>
        <!-- form body -->
        <div class="form-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- form Email input -->
                <label  for="email">  <b>{{ __('Ingresa tu E-Mail') }}</b></label>
                    <br>
                    <input id="email"
                    type="email"
                    class="formInput{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email"
                    placeholder="Ingresa tu nombre de usuario"
                    value="{{ old('email') }}" required autofocus
                    >
                <!-- form Email auth -->
                <div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- form Password input -->
                <label for="password"><b>{{ __('Ingresa tu
                  contraseña') }}</b></label>
                    <br>
                    <input id="password"
                    type="password"
                    class=
                          "formInput{{ $errors->has('password') ? ' is-invalid' : '' }}"

                    name="password" required
                    placeholder= "Ingresa tu contraseña"
                    >

                <!-- form Password auth -->
                <div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- form checkbox -->
                <div class="checkboxContainer">
                    <input class="formCheckbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">{{ __('Recordarme') }}
                    </label>
                </div>
                <br>
                <br>
                <br>
                <!-- button container -->
                <div class="button-container">
                    <button type="submit" class="signupBtn">{{ __('Login') }}
                    </button>
                    <a class="psw" href="{{ route('password.request') }}">{{ __('Olvidaste tu Contraseña?') }}
                    </a>
                </div>
            </form>
      </div>
    </div>
@endsection
