<?php 

session_start();

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';


$bebida = new bebida;

$actualizado = $bebida->updateProducto();



$_SESSION['alert'] = [
    'message' => 'el producto se actualizo con exito',
    'type' => 'success'


];

header('location: ../../views/producto/edit.php');









?>