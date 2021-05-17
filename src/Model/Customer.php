<?php


namespace App\Model;


class Customer
{
    public $customerName;
    public $address;
    public $phone;
    public $status;

    function __construct($customerName, $address, $phone, $status)
    {
        $this->customerName = $customerName;
        $this->address = $address;
        $this->phone = $phone;
        $this->status = $status;
    }
}