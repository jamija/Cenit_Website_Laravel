@extends('layouts.default')

@section ('title', 'Registráte')

@section ('Registráte')

@section ('main-section-content')

<!-- logica IF LOGGED -> #PROFILE.BLADE.PHP -->

<div class="container-page">
		 <div class="container-img">
			 <img src="images/page-img/leaves.jpg"	class="page-img">
		 </div>
			   <div class="container-form" "register">
				   <form method="post" enctype="multipart/form-data">
		         <h2>Registrate</h2>
		         	<p>Por favor llena este formulario <br> para crear una cuenta.</p>

									<label><b>Nombre completo</b></label>

		 								 <input	type="text"	placeholder="Nombre completo"	name="name" class="formInput <?= $FormData->fieldHasError('name') ? 'invalidInputBorder' : ''; ?>"	value="<?=$FormData->getName(); ?>">

                     <!-- DIV DE ERROR <div class="invalidInput">

                     </div> -->
												<br>

										 <label><b>Correo electrónico:</b></label>

											<input type="text" placeholder="Ingresar email" name="email" class="formInput <?= $FormData->fieldHasError('email') ? 'invalidInputBorder' : ''; ?>"	value="<?= $FormData->getEmail(); ?>">

                      <!-- DIV DE ERROR <div class="invalidInput">

                      </div> -->
												<?php endif; ?>

											<label><b>Nombre de usuario</b></label>

											<input type="text"	placeholder="Nombre de usuario" name="userName" class="formInput <?= $FormData->fieldHasError('userName') ? 'invalidInputBorder' : ''; ?>"
											value="">

                      <!-- DIV DE ERROR <div class="invalidInput">

                      </div> -->



											<label><b>Password:</b></label>

											<input	type="password"	placeholder="Contraseña"	name="password"	class="formInput <?= $FormData->fieldHasError('password') ? 'invalidInputBorder' : ''; ?>">

                      <!-- DIV DE ERROR <div class="invalidInput">

                      </div> -->
											<br>

											<label><b>Repetir password:</b></label>

											<input type="password"	placeholder="Repetir password" name="rePassword" class="formInput <?= $FormData->fieldHasError('password') ? 'invalidInputBorder' : ''; ?>">

                      <!-- DIV DE ERROR <div class="invalidInput">

                      </div> -->

											<br>

											<label><b>País de nacimiento:</b></label>


											<select	name="country" class="formInput">

												<option value="">Elegí un país</option>

                        <!-- DIV DE PAISES -->
											</select>

                      <!-- DIV DE ERROR <div class="invalidInput">

                      </div> -->
											<br>

											<label><b>Imagen de perfil:</b></label>

												<div class="customFile">
													<input type="file" class="customFileInput" name="avatar">

												<label class="customFileLabel">Elija el archivo...</label>
											</div>

                          <!-- DIV DE ERROR <div class="invalidInput">

                          </div> -->

										<p>Creando una cuenta aceptas nuestras <a href="#" style="color:dodgerblue">Politicas de privacidad</a>.</p>

				     <button type="button" class="cancelBtn">Cancelar</button>
				     <button type="submit" class="signupBtn">Registrarme</button>

				 	</form>
				 </div>
			 </div>
