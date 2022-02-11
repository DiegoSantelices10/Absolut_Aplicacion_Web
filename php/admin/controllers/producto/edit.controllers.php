<?php

require __DIR__ . '../../../conn/Db.php';
require __DIR__. '../../../models/Bebida.php';



$bebida = new Bebida;

$productos = $bebida->all();

$cantidad_productos = count($productos);

$cantidad_de_paginas = 3;

$productos_x_pagina = $cantidad_productos / $cantidad_de_paginas;

$paginas = ceil($productos_x_pagina); 

    




//if($_GET['pagina']>$paginas){
//    header('Location:edit.php?pagina=1');
//}



$resultado = $bebida->paginacion($cantidad_de_paginas);






//$iniciar = ($_GET['pagina'])*$productos_x_pagina;

//$bebida->paginacion($iniciar, $productos_x_pagina);












?>
