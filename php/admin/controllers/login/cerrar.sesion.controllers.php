<?php
  session_start();


 
    unset($_SESSION['usuario']); 
    session_destroy();
    header('Location: ../../views/login/login.php');
    exit;
 
 
?>