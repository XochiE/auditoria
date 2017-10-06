@extends('layouts.master')

@section('css-master')
  @yield('css')
@endsection

@section('content-master')
<style>.fondo{ background-image: url(/img/login.jpeg);}</style>
<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark black blue-gradient">

        <!-- Navbar brand -->

        <a class="navbar-brand" href="#">Auditor</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                @if (Auth::guest())
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/') }}">Acceder <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/register') }}">Crear cuenta</a>
                  </li>
                @else
                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('/logout') }}">Salir</a>
                      </div>
                  </li>
                @endif

            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->

    </nav>
<!--/.Navbar-->
@yield('content')
@endsection

@section('js-master')
  @yield('js')
@endsection
