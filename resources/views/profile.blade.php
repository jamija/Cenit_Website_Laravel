@extends('layouts.default')

@section ('title', 'Perfil')

@section ('profile')

@section ('main-section-content')

  <!-- if Not Logged in-->
  @guest
    <<?php return redirect()->route('login'); ?>

  <!-- if Logged in -->
  @else
    <!-- profile page -->
    <h1 class=user-name >Bienvenidx {{ Auth::user()->name }} </h1>
        <div class="allContainer">
            <div class="container-profile-img">
                @if (Auth::user()->avatar) <img class="user-profile-image" src="/public/users/images/{{ Auth::user()->avatar }}">
                @else <img class="user-profile-image" src="http://placekitten.com/g/200/300">
                @endif
            </div>
            <div class="container-profile-data">
              <h3 class=user-data>{{ Auth::user()->email }}</h3>
            <h3 class=user-data>{{ Auth::user()->country }}</h3>
            </div>
        </div>
        <!-- profile options-->
        <section class="user-profile-options">
                  <p><a	href="history"></a> Mis compras</p>
                  <p><a	href="wishlist"></a> Wishlist</p>
        </section>
    @endif
@endsection
