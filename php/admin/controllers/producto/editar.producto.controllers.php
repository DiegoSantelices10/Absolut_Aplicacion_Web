<?php


require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';

$bebidas = new Bebida;


$producto =$bebidas->buscarProducto($_GET['id']);



 ?>





