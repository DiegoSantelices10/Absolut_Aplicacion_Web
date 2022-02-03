<?php
session_start();
require __DIR__ . '../../../controllers/producto/index.controllers.php';
include '../../views/header-footer/header.php';

?>
<div class="container-fluid">

    <div class="box_user_search container-fluid">
        <div class="welcome_user">
            <h2>Bienvenido <i><?php echo $_SESSION['usuario']  ?></i></h2>
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
            <a href="producto.php?id=<?php echo $producto->id ?>">
                <img class="img-responsive" src="../../../../img/<?php echo $producto->imagen ?>" alt="absolut">
            </a>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
        <h1>No Hay Bebidas</h1>
        <?php endif ?>
    </div>
</div>


<div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4">

        <!--Modal: Name-->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body mb-0 p-0">
                        <div >
                            <img class="img-fluid"  src="../../../../img/fondo/citron.JPG" alt="alcohol">
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <span class="mr-4">Absolut</span>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Name-->

        <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
                data-toggle="modal" data-target="#modal1"></a>

    </div>


    <?php include '../../views/header-footer/footer.php>' ?>