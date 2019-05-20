<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <!-- Fonts-Awesome -->
     <!--<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">-->
    <!-- CSS materialize -->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet" type="text/css">
    <!--material-icons CSS -->
   <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="{{ asset('css/material-icons.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.cs') }}s" rel="stylesheet" type="text/css">

    @yield('css')

    <title>@yield('title', 'São Domingos Savio nº 1')</title>
</head>
<body>
<header>
        <nav>
            
              <div class="nav-wrapper">
                 
                <a href="#!" class="brand-logo hide-on-large-only"><img class="logo" src="image/logo.ico"></a>

                <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class=" material-icons">menu</i></a>

                <ul class="left hide-on-med-and-down">
                  <li><a href="#"><i class="tiny material-icons left">home</i>Home</a></li>
                  <li><a href="#"><i class="tiny material-icons left">info</i>Sobre</a></li>
                  <li><a href="#seccao"><i class="tiny material-icons left">looks_4</i>Secção</a></li>
                  <li><a href="#"><i class="tiny material-icons left">event_note</i>Noticias</a></li>
                </ul>
                <a href="#!" class="center brand-logo hide-on-med-and-down"><img class="logo" src="image/logo.ico"></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#"><i class="tiny material-icons left">camera_alt</i>Midia</a></li>
                  <li><a href="#servicos"><i class="tiny material-icons left">local_library</i>Serviços</a></li>
                  <li><a href="#contactos"><i class="tiny material-icons left">contacts</i>Contactos</a></li>
                  <li><a href="#"><i class="tiny material-icons left">lock</i>Reservado</a></li>
                </ul> 
                     
                </div>
           
           
        </nav>
        <!--Menu Mobile -->
        <ul class="sidenav grey lighten-3" id="mobile-menu">
            <a href="#!" class="center brand-logo"><img class="logo" src="image/logo.ico"></a>
            <br /><br />
            <li><a href="#">Home</a></li>
            <li><a href="#">O Agrupamento</a></li>
            <!-- <li><a href="#">Actividades</a></li> -->
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Midia</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#contactos">Contactos</a></li>
            <li><a href="#">Reservado</a></li>
        </ul>       
  </header>