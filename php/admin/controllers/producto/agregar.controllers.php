<?php
session_start();

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';

$bebidas = new Bebida;




$producto = $bebidas->agregarProducto();

$_SESSION['alert'] = [
    'message' => 'el producto se agrego con exito',
    'type' => 'success'


];

header('location: ../../views/producto/agregar.php');