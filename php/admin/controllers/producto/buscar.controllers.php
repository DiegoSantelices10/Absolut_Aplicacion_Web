<?php

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';
 

$bebida = new Bebida;

$buscador = $_GET['buscar'];

$producto = $bebida->buscardorProducto($buscador);


if(!isset($producto)  || !$producto){
    require __DIR__ .'../../../views/producto/resultado.cero.php';
exit;
} else {
    require __DIR__ .'../../../views/producto/producto.detalles.php';
}
 
   
    








