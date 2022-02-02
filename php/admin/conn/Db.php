<?php 


class DataBase{

public static function getConn()
{
    try{
        $db = new PDO('mysql:dbname=absolut;charset=utf8;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    
    }
    return $db;
}
    
}

?>