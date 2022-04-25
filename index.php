<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Absolut | Admin</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/estilos.css">
	<link rel="stylesheet" href="./vendor/fancybox/jquery.fancybox.min.css">
	<link rel="stylesheet" href="./vendor/fontawesome-free-5.9.0-web/css/all.css">
</head>

<body>
	<section id="login-bg">
	<div class="form-box-user">
		<div class="form-create-user">
			<form action="./php/admin/controllers/login/login.controllers.php" method="POST" role="form">
				<legend>BIENVENIDO</legend>

				<div class="form-group">
					<?php include './php/admin/session/message.login.php'; ?>
					<label for="">Usuario</label>
					<input type="text" class="form-control" name="usuario" required>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" required>
				</div>


				<button type="submit" class="btn btn-primary w-100 mt-3 ">Iniciar sesion</button>
			</form>
			<div>
				<a class="btn btn-outline-primary w-100 mt-3" style="color: white" href="./php/admin/views/login/crear-usuario.php" role="button">Registrate</a>
			</div>
		</div>
	</div>
	</section>
	<script src="./js/jquery-3.3.1.slim.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./vendor/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>