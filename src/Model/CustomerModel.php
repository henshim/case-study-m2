<?php


namespace App\Model;

use PDO;

class CustomerModel
{
    protected $database;

    function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    function getAll()
    {
        $sql = 'select customer_id, customerName, address, phone, customer_status from customer';
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    function create($customer)
    {
        $sql = 'insert into customer(customerName,address,phone,customer_status) 
                values (?,?,?,?)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $customer->customerName);
        $stmt->bindParam(2, $customer->address);
        $stmt->bindParam(3, $customer->phone);
        $stmt->bindParam(4, $customer->status);
        return $stmt->execute();
    }

    function delete($id)
    {
        $sql = 'delete from customer where customer_id=?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    function update($id, $customer)
    {
        $sql = 'update customer set customerName=?,address=?,phone=?,customer_status=? where customer_id=?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $customer->customerName);
        $stmt->bindParam(2, $customer->address);
        $stmt->bindParam(3, $customer->phone);
        $stmt->bindParam(4, $customer->status);
        $stmt->bindParam(5, $id);
        return $stmt->execute();
    }

    function get($id)
    {
        $sql = 'select customer_id, customerName, address, phone, customer_status from customer where customer_id=?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    function search($search)
    {
        $sql = "select * from customer where customerName like '%$search%'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}