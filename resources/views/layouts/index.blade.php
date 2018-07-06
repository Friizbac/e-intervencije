<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo asset('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo asset('bower_components/Ionicons/css/ionicons.min.css') ?>">
    <!-- Theme style -->

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo asset('dist/css/skins/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('dist/css/AdminLTE.min.css') ?>?v=0.2">
    <link rel="stylesheet" href="<?php echo asset('bower_components/morris.js/morris.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('bower_components/jvectormap/jquery-jvectormap.css') ?>">
    <link rel="stylesheet"
          href="<?php echo asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

    @guest

    @else
        <header class="main-header">
            <a href="/" class="logo">
                <span class="logo-mini"><b>e</b>I</span>
                <span class="logo-lg"><b>e</b>Intervencije</span>
            </a>
            <nav class="navbar navbar-static-top">
                <i class="btn btn-lg" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <p class="fas fa-align-justify" style="color:white"></p>
                </i>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo asset('dist/img/user2-160x160.jpg') ?>" class="user-image"
                                     alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?php echo asset('dist/img/user2-160x160.jpg') ?>" class="img-circle"
                                         alt="User Image">
                                    <p>
                                        {{ Auth::user()->name }} {{ Auth::user()->surname }}
                                        <small>TI Hosting</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/users/{{ Auth::user()->id }}/edit"
                                           class="btn btn-default btn-flat">Uredi profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                           class="btn btn-default btn-flat">
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        @include ('inc.main-nav')
    @endguest
    <div class="content-wrapper">
        <section class="content-header">
            @include ('inc.messages')
            @yield('content')









</body>
</html>
