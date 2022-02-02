<?php
session_start();
require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/usuario.php';


$nombre= $_POST ['usuario'];
$password = $_POST['password'];

$usuario = new usuario();

$us= $usuario->usuarioLogin($nombre);

$pass= password_verify($password, $us->password);




if($us && $pass == true){
    $_SESSION['acceso'] = true;
    $_SESSION['usuario'] = $us->usuario;
    header('location: ../../views/producto/index.php');
} else {
    $_SESSION['message'] =[
        'type'=> 'danger',
        'text' => 'El usuario o contraseña son incorrectos'];
    header('location: ../../views/login/login.php');
}










