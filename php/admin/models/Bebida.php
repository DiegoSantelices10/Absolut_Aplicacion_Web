<?php 

class Bebida 
{
private $db;
private $nombre;
private $cantidad;
private $precioventa;
private $id;
private $imagen;


public function getId(){
    return $this->id;
}
public function getNombre(){
    return $this->nombre;
}

public function getCantidad(){
    return $this->cantidad;
}
public function getPrecioventa(){
    return $this->precioventa;
}
public function getImagen (){
    return $this->imagen;
}



public function __construct(){


    $this->db = DataBase::getConn();
}
 

public function all(){
    
$query = $this->db->prepare('SELECT * FROM bebidas');

$query->execute();

$lista= $query->fetchAll(PDO::FETCH_OBJ);
return $lista;
}


public function paginate($cuantos = 5)
{
$pagina = $_GET['pagina'] ?? 1;
    $desde = ($pagina-1) * $cuantos;

    $query = $this->db->prepare("SELECT * FROM bebidas limit $cuantos offset $desde");

$query->execute();

$pagina=$query->fetchAll(PDO::FETCH_OBJ);


return $pagina;
}

public function count(): int
{


    $query = $this->db->prepare("SELECT count(id) as total FROM bebidas");
 
$query->execute();

 $resultado = $query->fetch(PDO::FETCH_OBJ);
 return $resultado->total;
}


public function buscarProducto($id){

    $query = $this->db->prepare('SELECT * FROM bebidas WHERE id=:id ');

$query->execute([':id' => $id]);
$bebida = $query->fetch(PDO::FETCH_OBJ);

return $bebida;

}

public function buscardorProducto($producto){

    $query = $this->db->prepare('SELECT * FROM bebidas WHERE nombre LIKE "%" :producto');

$query->execute([':producto' => $producto]);
$producto = $query->fetch(PDO::FETCH_OBJ);

return $producto;

}
public function updateProducto(){

$query = $this->db->prepare('UPDATE bebidas SET Nombre=:nombre, Cantidad=:cantidad, Precioventa =:precioventa WHERE id=:id');

 $query->execute([
    ':nombre' => $_GET["nombre"],
    ':precioventa' => $_GET["precio"],
    ':cantidad' => $_GET["cantidad"],
    ':id' => $_GET["id"]
    ]);

}


public function agregarProducto(){
    $query = $this->db->prepare("INSERT INTO bebidas (Nombre, Cantidad, Precioventa) VALUES (:nombre,:cantidad,:precioventa)");

    $query->execute(
        [
            ':nombre' => $_POST["nombre"],
            ':precioventa' => $_POST["precio"],
            ':cantidad' => $_POST["cantidad"]
            
        ]);
        

}

public function deleteProducto(){
    $query = $this->db->prepare("DELETE FROM `bebidas` WHERE id = :id");
    
    $query->execute([':id' => $_GET["id"]]);
        

}


}

