<?php


namespace App\Model;

use PDO;

class CateModel
{
    protected $database;
    public function __construct()
    {
        $db=new DBConnection();
        $this->database=$db->connect();
    }

    function getAll($name){
        $sql="select * from v_product where category_name=?";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->execute();
return $stmt->fetchAll();
    }
}