<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#000000" />

        <title>My Users</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontawesome/all.min.css') }}">

    </head>
  <body>

        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" style="background-color:#444745"><img src="{{ URL::asset('img/logo.png') }}" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/pedro-gabriel-leal-jimenez-464637141/" target="_blank">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
            </ul>
            <form name="bencc" method="get" action="http://www.google.com/search" id="bencc" class="form-inline mt-2 mt-md-0" target="_blank">
                <input type="hidden" name="domains" value="">
                <input type="hidden" name="sitesearch" value="">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('bencc').submit()"><i class="fas fa-search"></i></button>
            </form>
            </div>
        </div>
        </nav>
        </header>
        <div class="container mt-5 mb-5">

            <div class="row">

            <div class="col-md-12">

                <div class="header">
                <div class="container">
                <div class="row">
                <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="{{ route('admin/users') }}">Administrador</a></h1>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="input-group form">
                            <!--
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Buscar</button>
                            </span>
                            -->
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="navbar navbar-inverse" role="banner">
                        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                            <ul class="nav navbar-nav">
                            <li><a href="{{ route('admin/users') }}">Administrador</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
            </div>
