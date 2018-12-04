@extends('layouts.default')

@section ('title', ' cenit - Registráte')

@section ('main-section-content')

<div class="container-page">
		 <!-- Register-Form -->
			   <div class="container-form" "register">
					 <div class="container-form">
			         <!-- form header -->
			         <div class="form-header">
				           <h2>{{ __('Registrate') }}</h2>
				         	<p>Por favor llena este formulario <br>para crear una cuenta.</p>
			      		</div>
      <!-- form body -->
        	<div class="form-body">
						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
								@csrf
                <!-- name input -->
								<div>
                		<label  for="name">  <b>{{ __('Ingresa Nombre Completo') }}</b></label>
										<input id="name"
										 type="text"
										 class="formInput{{ $errors->has('name') ? ' is-invalid' : '' }}"
										 name="name"
										 value="{{ old('name') }}" required autofocus
										 placeholder="Nombre completo"
										 >
								</div>
                <!-- name auth -->
										 <div>
												 @if ($errors->has('name'))
														 <span class="invalid-feedback" role="alert">
																 <strong>{{ $errors->first('name') }}</strong>
														 </span>
												 @endif
										 </div>
										<br>
										<!-- Create Username input -->
								<div>
										<label><b>Nombre de usuario</b></label>
										<input
										id="user_name"
										type="text"
										placeholder="Nombre de usuario"
										name="user_name"
										class="formInput{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
										value="{{ old('user_name') }}"
										required>
								</div>
										<!-- Username auth -->
								<div>
										@if ($errors->has('user_name'))
												<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('user_name') }}</strong>
												</span>
										@endif
								</div>
										<!-- Email input -->
								<div>
									<label  for="email">  <b>{{ __('Ingresa tu E-Mail') }}</b></label>
											<br>
											<input id="email"
											type="email"
											class="formInput{{ $errors->has('email') ? ' is-invalid' : '' }}"
											name="email"
											placeholder="Ingresa tu nombre de usuario"
											value="{{ old('email') }}" required autofocus
											>
								</div>
										<!-- Email auth -->
								<div>
									@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('email') }}</strong>
											</span>
									@endif
								</div>
								<!-- country selector-->
	<!-- {{-- Acá va la consulta de paises a la api con javaS de momento solo vaos a prorar el crud--}} -->
								<div>
										<label for="country">{{ __('Selecciona tu País') }}</label>
										<input id="country" type="text" class="formInput{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required>
								</div>
									<!-- country auth-->
								<div>
										@if ($errors->has('country'))
												<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('country') }}</strong>
												</span>
										@endif
								</div>
								<!-- form Password input -->
								<div>
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
								</div>

                <!-- form Password auth -->
                <div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- form Confirm Password auth -->
								<div>
										<label for="password-confirm">
                      <b>{{ __('Confirma tu contraseña') }}</b></label>
                      <input id="password-confirm" type="password" class="formInput" name="password_confirmation" required>
								</div>
                      <!-- {{-- campo plantead para a imagen o Avatare --}} -->

                <!-- image input -->
								<div class="custom-file">
											<label class="custom-file-label" for="customFile"><b> Seleciona una imagen de perfil...</b></label>
											<input type="file" class="formInput" id="customFile" name="avatar">
								</div>
					 	</form>
                <p>Creando una cuenta aceptas nuestras <a href="#" style="color:dodgerblue">Politicas de privacidad</a>.</p>

               <button type="button" class="cancelBtn">Cancelar</button>
               <button type="submit" class="signupBtn">Registrarme</button>
            </div>
                <!-- End form body -->
                <!-- side Image -->
                <div class="container-img">
                    <img src="images/page-img/leaves.jpg"	class="page-img">
                </div>
                <!-- end side Image -->
		 </div>
@endsection
