<?php

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/usuario.php';




$us = new usuario();

$usuario = $_POST ['usuario'];
$password = $_POST ['password'];

$pass = password_hash($password, PASSWORD_DEFAULT);


$us->crearUsuario($usuario, $pass);



echo 'usuario registrado';



header('location: ../../../../index.php');