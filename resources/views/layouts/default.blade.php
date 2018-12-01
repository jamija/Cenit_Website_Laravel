<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield ('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
           $(".toggle-nav").click(function () {
                  $(".navbar-nav ul").slideToggle(350);
            });
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Telex" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Header -->
    <header class=header-container>

        <!-- Navbar -->
        <nav class="navbar-nav">
            <a href="#" class="toggle-nav"> </a>
            <!-- Navbar Logo -->
            <div class="header-brand">
          				<a class="navbar-brand" href="index"> <img src="images/logo.jpg" alt="logotipo"></a>
            </div>
            <!-- Navbar Links -->
            <ul>
                <li><a class="link-nav" href="index">Inicio</a></li>
                <li><a class="link-nav" href="faq">Preguntas Frecuentes</a></li>
                <li><a class="link-nav" href="product-catalog">Tienda</a></li>
            </ul>
            <!-- Authentication Links -->
            <ul>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li> <a class= href="profile">
                        {{ Auth::user()->name }} <img class="imgNavProf" src="/public/users/images/{{ Auth::user()->avatar }}">}
                    </a>
                </li>

                <li>
                    <a class="link-nav" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                </li>
            @endguest
          </ul>
        <!-- Shopping bag img -->
          <ul>
                <li	class="li-img">
                    <a href="#"><img	class="shop-car"	src="images/bag.svg"	alt="shop-car">
                    </a>
                </li>
          </ul>

  </nav>

    </header>
      <!-- Content -->
      <section class="@yield('main-Section-class')">
          @yield('main-section-content')
      </section>
      <!-- Footer -->
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
                <li><a href="https://www.instagram.com/_cenit"><img src="images/icon_instagram.png"></a></li>
                <li><a href="https://www.facebook.com/cenit.arg"><img src="images/icon_facebook.png"></a></li>
                <li><a href="https://twitter.com/"><img src="images/icon_twitter.png"></a></li>
                <li><a href="https://www.youtube.com/"><img src="images/icon_youtube.png"></a></li>
              </ul>
            </section>
            <div class="copyright">
              <h6><strong>by Camila & Edison - FullStackDev - DigitalHouse @2018.</strong> Todos los derechos reservados.</h6>
            </div>
        </footer>
</body>
</html>
