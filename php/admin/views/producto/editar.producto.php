<?php
session_start();
require '../../controllers/producto/editar.producto.controllers.php';
include '../../views/header-footer/header.php'
?>


<h2 class="ml-3 float-left usuario">Bienvenido <i class="usuariose"><?php echo $_SESSION['usuario']  ?></i></h2>

<div class="container">
	<div class="row text-center login-page">
		<div class="col-md-12 login-form">
			<form action="../../controllers/producto/update.controllers.php" method="get">
				<div class="row">
					<div class="col-md-12 login-form-header">
						<p class="login-form-font-header">Actulizar Producto</span>
						<p>
					</div>

				</div>
				<div class="row">
					<div class="col-md-12 login-from-row">
						<input name="nombre" type="text" id="nombre" value="<?php echo $producto->nombre ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 login-from-row">
						<input name="cantidad" type="text" id="cantidad" value="<?php echo $producto->cantidad ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 login-from-row">
						<input name="precio" type="text" id="precioventa" value="<?php echo $producto->precioventa ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 login-from-row">
						<button class="btn btn-info">Aplicar cambios</button>
					</div>
				</div>
				<input type="hidden" name="id" value="<?php echo $producto->id ?>">
			</form>
		</div>
	</div>
</div>

<?php include '../../views/header-footer/footer.php' ?>