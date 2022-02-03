<?php 
session_start();
require '../../controllers/producto/editar.producto.controllers.php'; 
include '../../views/header-footer/header.php';
?>



<div class="img-fondo">
    <img src="../../../../img/fondo/<?php echo $producto->imgfondo ?>" alt="">
</div>
<h1 class="text-center"> <?php echo $producto->nombre ?></h1>

<?php include '../../views/header-footer/footer.php' ?>