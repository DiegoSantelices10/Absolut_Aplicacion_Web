<?php
session_start();
require __DIR__ . '../../../controllers/producto/index.controllers.php';
include '../../views/header-footer/header.php';

?>
<div class="container-fluid">

    <div class="box_user_search container-fluid">
        <div class="welcome_user">
            <h2>Bienvenido s <?php echo $_SESSION['usuario'] ?></h2>
        </div>

        <div class="search_prod">
            <form method="get" action="../../controllers/producto/buscar.controllers.php">
                <div class="form-group d-flex">
                    <input class="form-control mr-sm-3 px-5" type="text" aria-label="Search" name="buscar">

                    <button class="btn aqua-gradient btn-rounded btn-sm rounded px-3 fas fa-search"
                        style="background: rgb(7, 42, 117); color: white" type="submit"></button>
                </div>
            </form>
        </div>
    </div>

    <div class="titulo-productos">
        <p class="text-center">NUESTROS PRODUCTOS</p>
    </div>


<div class="productos">
    <?php if (count($productos)) : ?>
    <?php foreach ($productos as $producto) : ?>
    <div class="producto">
        <p class="titulo-producto"> <?php echo $producto->nombre ?></p>
        <a>
            <img data-toggle="modal" data-target="#modal<?php echo $producto->id ?>" class="p-1 img-responsive z-depth-1 "
                src="../../../../img/<?php echo $producto->imagen ?>" alt="absolut">
        </a>
    </div>


    <!--Modal: Name-->
    <div class="modal fade" id="modal<?php echo $producto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <div>
                        <img class="img-fluid" src="../../../../img/fondo/<?php echo $producto->imgfondo ?>" alt="alcohol">
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:space-between">
                    <span class="text-center" style="color: rgb(7, 42, 117); font-size: 24px;"><?php echo $producto->nombre ?></span>
                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 fas fa-times"
                        data-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else : ?>
    <h1>No Hay Bebidas</h1>
    <?php endif ?>


</div>


<?php include '../../views/header-footer/footer.php>' ?>