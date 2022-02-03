<?php
session_start();
include '../../views/header-footer/header.php'
?>



<div id="agregar-producto">

	<div class="container ">
		<div class="row text-center login-page">
			<?php include '../../session/message.agregar.php'; ?>
			<div class="col-md-12 login-form">
				<form action="../../controllers/producto/agregar.controllers.php" method="post">
					<div class="row">
						<div class="col-md-12 login-form-header">
							<p class="login-form-font-header">Agregar Producto</span>
							<p>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<input name="nombre" type="text" id="nombre" placeholder="Nombre" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<input name="cantidad" type="text" id="cantidad" placeholder="Cantidad" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<input name="precio" type="text" id="precioventa" placeholder="Precio venta" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<button class="btn btn-info">Agregar Producto</button>
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $producto->id ?>">
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include '../../views/header-footer/footer.php'
?>