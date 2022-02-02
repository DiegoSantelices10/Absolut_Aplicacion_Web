<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Absolut | Admin</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../css/estilos.css">
    <link rel="stylesheet" href="../../../../vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../../vendor/fontawesome-free-5.9.0-web/css/all.css">
  </head>
  <body id="login">
     <div class="container">
        <div class="row text-center login-page">
	   <div class="col-md-12 login-form">
	      <form action="../../controllers/login/login.controllers.php" method="post"> 			
	         <div class="row">
		    <div class="col-md-12 login-form-header">
		       <p class="login-form-font-header">Iniciar<span> Sesion</span><p>
		    </div>
		</div>
		<div class="row">
		<?php include '../../session/message.login.php';?>
		   <div class="col-md-12 login-from-row">
		      <input name="usuario" type="text" placeholder="Usuario" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="password" type="password" placeholder="Contraseña" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <button class="btn btn-info">Entrar</button>
		   </div>
		</div>
	    </form>
	</div>
     </div>
  </div>



     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../../js/popper.min.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
    <script src="../../../../vendor/fancybox/jquery.fancybox.min.js"></script>
</body>
</html>