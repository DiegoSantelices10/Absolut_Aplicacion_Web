<?php
session_start();
require '../../controllers/producto/editar.producto.controllers.php';
include '../../views/header-footer/header.php'
?>

<div class="container form-box-user1">

    <div class="form-create-user1">

        <form action="../../controllers/producto/update.controllers.php" method="GET" role="form">
            <legend>ACTUALIZAR PRODUCTO</legend>

            <div>
                <input type="hidden" name="id" value="<?php echo $producto->id ?>">
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label for="">NOMBRE</label>
                    <input type="text" class="form-control " name="nombre" value="<?php echo $producto->nombre ?>"
                        required>
                </div>
                <div class="col-6">
                    <label for="">CANTIDAD</label>
                    <input type="text" class="form-control " name="cantidad" value="<?php echo $producto->cantidad ?>"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="">PRECIO</label>
                    <input type="text" class="form-control " name="precioventa"
                        value="<?php echo $producto->precioventa ?>" required>
                </div>
                <div class="col-6">
                    <label for="">CATEGORIA</label>
                    <input type="text" class="form-control " name="categoriaID"
                        value="<?php echo $producto->categoriaID ?>" required>
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



<?php include '../../views/header-footer/footer.php' ?>