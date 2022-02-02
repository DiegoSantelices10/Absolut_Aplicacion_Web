<?php  if(!isset($_SESSION['acceso']) || !$_SESSION['acceso']) 
{
 header('location: ../login/login.php');
}
