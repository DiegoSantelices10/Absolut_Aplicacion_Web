<?php
session_start();
include '../../views/header-footer/header.php'
?>


<div class="edit container">
	<?php include '../../session/message.agregar.php' ?>
</div>

<div class="container form-box-user1">
    <div class="form-create-user1">

        <form action="../../controllers/producto/agregar.controllers.php" method="GET" role="form">
            <legend>PRODUCTO NUEVO</legend>

            <div class="form-group row">
                <div class="col-6">
                    <label for="">NOMBRE</label>
                    <input type="text" class="form-control " name="nombre" required>
                </div>
                <div class="col-6">
                    <label for="">CANTIDAD</label>
                    <input type="text" class="form-control " name="cantidad" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="">PRECIO</label>
                    <input type="text" class="form-control " name="precioventa" required>
                </div>
                <div class="col-6">
                    <label for="">CATEGORIA</label>
                    <input type="text" class="form-control " name="categoriaID" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label for="">IMAGEN PRODUCTO</label>
                    <input type="file" name="imagen">
                </div>
                <div class="col-6">
                    <label for="">IMAGEN BACKGROUND</label>
                    <input type="file" name="imgfondo">
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-2">ACTUALIZAR</button>

        </form>

    </div>

</div>


<?php
include '../../views/header-footer/footer.php'
?>