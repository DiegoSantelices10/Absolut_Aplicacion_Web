<?php 
session_start();
?>

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
                        <a class="nav-item nav-link active"   href="../../controllers/login/cerrar.sesion.controllers.php">CERRAR SESION</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    

<div class="card promoting-card">
  <div class="card-body d-flex flex-row">
    <div>
      <h4 class="card-title font-weight-bold mb-2"><?php echo $producto->nombre?></h4>
      <p class="card-text"><i class="fas fa-dollar-sign pr-2"></i><?php echo $producto->precioventa?><p>
    </div>

  </div>
  <div id= "imagen-detalles" class="view overlay">
    <img class="card-img-top rounded-0" src="../../../../img/fondo/<?php echo $producto->imgfondo ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>


  <div class="card-body">
    <div class="collapse-content">
      <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
      <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
      <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

    </div>

  </div>

</div>

<?php include '../../views/header-footer/footer.php'; ?>
