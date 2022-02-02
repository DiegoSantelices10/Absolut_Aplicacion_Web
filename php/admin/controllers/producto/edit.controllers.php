<?php

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';



$bebida = new Bebida;

$productos = $bebida->all();








?>
