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
        <h2>Logueate</h2>


    <!--  PHP OLD AUTH
      <?php //if ( $LoginData->getAllErrors() ) : ?>
          <div class="alertDanger">
            <ul>
              <?php //foreach ($LoginData->getAllErrors() as $error) : ?>
                <li> <?=// $error ?> </li>
              <?php //endforeach; ?>
            </ul>
          </div>
        <?php //endif; ?> -->

      <form method="post">
        <label><b>Email</b></label>
        <br>
        <input
        type="text"
        placeholder="Ingresa tu nombre de usuario"
        name="email" required
        class= "formInput"
        value=""
        >

          <!-- DIV DE VALIDACION <div class="invalidInput">

          </div> -->

        <label for="psw"><b>Contraseña</b></label>
        <br>
        <input
        type="password"
        placeholder= "Ingresa tu contraseña"
        name="password" required
        class= "formInput"
        >
        <!-- DIV DE VALIDACION <div class="invalidInput">

        </div> -->

          <br>
          <br>
        <label class="checkboxContainer">
          <input class= "formCheckbox" type="checkbox" checked="checked" name="remember"> Recordarme
        </label>
            <br>
            <br>
            <br>
        <button type="button" class="cancelBtn">Cancel</button>
        <button type="submit" class="signupBtn" >Ingresar</button>
          <br>
          <br>
          <br>
          <span class="psw">Olvidaste tu <a href="#">Contraseña?</a></span>
      </form>
  </div>
</div>
@endsection
