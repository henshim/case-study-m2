<?php

namespace App\Model;

use PDO;

class ProductModel
{
    protected $database;

    function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'select * from v_product';
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function create($product)
    {
        $sql = 'insert into products(product_name, price, status,description,img,category_id) 
                values (?,?,?,?,?,?)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->productName);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->status);
        $stmt->bindParam(4, $product->description);
        $stmt->bindParam(5, $product->img);
        $stmt->bindParam(6, $product->category);
        //var_dump($product);
        return $stmt->execute();
    }

    function delete($id)
    {
        $sql = 'delete from products where product_id=?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    function update($id, $product)
    {
        $sql = "update products set product_name = ?,price = ?,status = ?,description = ?, img = ?, category_id=? where product_id = ?;";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->productName);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->status);
        $stmt->bindParam(4, $product->description);
        $stmt->bindParam(5, $product->img);
        $stmt->bindParam(6, $product->category);
        $stmt->bindParam(7, $id);
        return $stmt->execute();
    }

    function get($id)
    {
        $sql = 'select * from products where product_id=?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function search($search)
    {
        $sql = "select * from v_product where product_name like '%$search%' ";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
