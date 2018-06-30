<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Cursos</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url(); ?>courses" class="dropdown-item">Listado</a>
                        <a href="<?php echo base_url(); ?>courses/create" class="dropdown-item">Crear</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Categorías</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo base_url(); ?>categories" class="dropdown-item">Listado</a>
                        <a href="<?php echo base_url(); ?>categories/create" class="dropdown-item">Crear</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">Experiencia con Pagos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">Estilo formulario contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" placeholder="Buscar" type="text">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Búsqueda</button>
            </form>
        </div>
    </div>
</nav>

<div class="container" style="padding: 25px">
    <div class="page-header">
