<?php session_start(); ?>
<!DOCTYPE html>
<html>

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
<div class="container form-box-user">

<div class="form-create-user">

	<form action="../../controllers/login/login.controllers.php" method="POST" role="form">
		<legend>INGRESA A TU CUENTA</legend>

		<div class="form-group">
		<?php include '../../session/message.login.php'; ?>
			<label for="">Usuario</label>
			<input type="text" class="form-control" name="usuario" required>
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" required>
		</div>


		<button type="submit" class="btn btn-primary mt-2">INGRESAR</button>
		<a class="btn btn-outline-primary mt-2" style="color: white" href="../login/crear-usuario.php" role="button">CREA UNA CUENTA</a>
	</form>

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