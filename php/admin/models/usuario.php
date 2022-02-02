<?php 

class usuario {


    
    private $db;
    private $id;
    private $usuario;
    private $password;
    
    public function __construct()
    {

     $this->db = DataBase::getConn();

        
    }
public function getUsuario(){
    return $this->usuario;
}
public function getPassword(){
    return $this->password;
}

public function getId(){
    return $this->id;
}
public function usuarioLogin ($usuario){
   
    $query = $this->db->prepare('SELECT * FROM admin WHERE usuario= :usu');
    $query->execute([":usu"=>$usuario]);
    $usuario = $query->fetch(PDO::FETCH_OBJ);

    return $usuario;

    

}


    public function crearUsuario($usuario, $password)
{
     
    $query = $this->db->prepare('INSERT INTO admin ( usuario, password) VALUES ( :usu, :pass)');

    $query->execute(array(":usu"=>$usuario, ":pass"=>$password));
    
    



}

}





?>