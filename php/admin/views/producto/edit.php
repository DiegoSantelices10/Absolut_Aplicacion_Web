<?php
session_start();
require __DIR__ . '../../../controllers/producto/edit.controllers.php';
include '../../views/header-footer/header.php'
?>

<div class="container">
    <div class="edit">
        <?php include '../../session/message.edit.php' ?>
    </div>

    <div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Productos</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) : ?>
            <tr>
                <td scope="row"><?php echo $producto->nombre ?></td>
                <td><?php echo $producto->cantidad ?></td>
                <td><?php echo $producto->precioventa ?></td>
                <td>
                    <a href="editar.producto.php?id=<?php echo $producto->id; ?>" class="btn btn-primary"><span
                            class="far fa-edit"></span></a>
                </td>
                <td>
                    <a href="../../controllers/producto/delete.controllers.php?id=<?php echo $producto->id; ?>"
                        class="btn btn-danger"><span class="fa fa-trash"></span></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</div>


<?php include '../../views/header-footer/footer.php' ?>