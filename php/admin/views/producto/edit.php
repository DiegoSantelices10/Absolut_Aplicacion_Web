<?php
session_start();
if(!$_GET){
    header('Location:edit.php?pagina=1');
}
require __DIR__ . '../../../controllers/producto/edit.controllers.php';
include '../../views/header-footer/header.php';




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
                <?php foreach ($resultado as $producto) : ?>
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



    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item 
            <?php echo $_GET['pagina'] <= 1 ? 'disabled': ''?>">
                <a class="page-link" href="edit.php?pagina=<?php echo $_GET['pagina']-1?>" tabindex="-1">Anterior</a>
            </li>



            <?php for ($i = 0; $i<$paginas; $i++ ): ?>
            <li class="page-item 
            <?php echo $_GET['pagina'] == $i+1 ? 'active' : ''  ?>">
                <a class="page-link" href="edit.php?pagina=<?php echo $i+1?>">
                    <?php echo $i+1?></a>
            </li>
            <?php endfor; ?>

            <li class="page-item
            <?php echo $_GET['pagina'] >= $paginas ? 'disabled': ''?>">
                <a class="page-link" href="edit.php?pagina=<?php echo $_GET['pagina']+1?>">Siguiente</a>
            </li>
        </ul>
    </nav>
</div>