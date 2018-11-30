<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield ('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Telex" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <?php //---------------------------------header ?>

    <header class=header-container>
      	<section class=header-brand>
      				<a class="navbar-brand" href="index.php"> <img src="images/logo.jpg" alt="logotipo"></a>
      		 </section>

      		<nav class="navbar-nav">

      			<a href="#" class="toggle-nav"> </a>

      			<ul>
      				<li><a class="link-nav-" href="index.php">Inicio</a></li>
      				<li><a class="link-nav" href="faq.php">Preguntas Frecuentes</a></li>
      				<li><a class="link-nav" href="product-catalog.php">Tienda</a></li>
      			</ul>
      			<ul class="controlsUser">
      					<li><a class="nameUsNav"	href="profile.php">	<img class="imgNavProf" src="data/avatars/">


      					<li><a href="login.php">Logueate</a></li>
      					<li><a href="register.php">Registráte</a></li>
      					<li	class="li-img"><a href="#"><img	class="shop-car"	src="images/bag.svg"	alt="shop-car"></a></li>


      			</ul>
          </nav>
      </header>

    <?php //---------------------------------content ?>
      <section class="@yield('main-Section-class')">
          @yield('main-section-content')
      </section>


    <?php //----------------------------------footer ?>
      <footer>
        <section class="footer-info">
          <h6>cenit.indumento@gmail.com</h6>
           <br>
            <h2>Newslleter</h2>
            <a href= "mailto:cenit.indumento@gmail.com"><img src="images/newsletter.png" alt="newslleter"></a>
            </section>

            <section class="link-footer1">
              <ul>
                <li><a href="index.php">inicio</a></li>
                <li><a href="profile.php">perfil</a></li>
                <li><a href="product-catalog.php">tienda</a></li>
              </ul>
            </section>

            <section class="link-footer2">
              <ul>
                <li><a class="" href="faq.php">preguntas frecuentes</a></li>
                <li><a class="" href="login.php">logueate</a></li>
                <li><a class="" href="register.php">registráte</a></li>
              </ul>
            </section>

            <section class="social-footer">
              <ul>
                <li><a href="https://www.instagram.com/"><img src="images/icon_instagram.png"></a></li>
                <li><a href="https://www.facebook.com/"><img src="images/icon_facebook.png"></a></li>
                <li><a href="https://twitter.com/"><img src="images/icon_twitter.png"></a></li>
                <li><a href="https://www.youtube.com/"><img src="images/icon_youtube.png"></a></li>
              </ul>
            </section>
            <div class="copyright">
              <h6><strong>by Camila & Edison - FullStacks - DigitalHouse @2018.</strong> Todos los derechos reservados.</h6>
            </div>
        </footer>

        <script src="js/jquery-3.3.1.min.js"></script>
           <script>
               $(".toggle-nav").click(function () {
                      $(".navbar-nav ul").slideToggle(350);
                });
          </script>
    </body>
</html>
