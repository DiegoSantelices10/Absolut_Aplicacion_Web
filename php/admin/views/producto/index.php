<?php 
session_start();
require __DIR__ . '../../../controllers/producto/index.controllers.php';
include '../../views/header-footer/header.php';

?>

  <h2 class="ml-3 float-left usuario">Bienvenido   <i class="usuariose"><?php echo $_SESSION['usuario']  ?></i></h2>

<form method="get" action="../../controllers/producto/buscar.controllers.php"  class="form-inline md-form mr-auto mb-4 search">
  <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search" name="buscar">
  <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Buscar</button>
</form>

<h1 class="text-center titulo-productos">NUESTROS PRODUCTOS</h1>

<div class="container-fluid" id="centro">
           <?php if(count($productos)): ?>
                <?php  foreach($productos as $producto): ?>
                   
                <div id="div">
                <p class="titulo-producto"> <?php echo $producto->nombre ?></p>    
                <a href="producto.php?id=<?php echo $producto->id ?>">
                    <img class="img-fluid" src="../../../../img/<?php echo $producto->imagen?>"  alt="absolut">
                 </a>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h1>No Hay Bebidas</h1>
            <?php   endif?>
            </div>
        

<?php 
include '../../views/header-footer/footer.php'
?>