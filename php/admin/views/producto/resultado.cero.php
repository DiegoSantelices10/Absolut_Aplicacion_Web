<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../css/estilos.css">
    <link rel="stylesheet" href="../../../../vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../../vendor/fontawesome-free-5.9.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <title>ABSOLUT</title>
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="../producto/index.php">ABSOLUT.</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto text-center">
                        <a class="nav-item nav-link active"  href="../../views/producto/index.php">LISTADO PRODUCTOS</a>
                        <a class="nav-item nav-link active"  href="../../views/producto/edit.php">EDITAR</a>
                        <a class="nav-item nav-link active"  href="../../views/producto/agregar.php">AGREGAR</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
   
<h1 class="text-center m-5">No se encontraron resultados de la busqueda</h1>
<div class="resultadocero">
     <img src="../../../../img/sinresultados.jpg" alt="resultado">
</div>
<?php include '../../views/header-footer/footer.php'; ?>
