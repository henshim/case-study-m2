<?php


namespace App\Controller;

use App\Model\CateModel;

class CateController
{
    protected $cateModel;

    public function __construct()
    {
        $this->cateModel = new CateModel();
    }

    function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === 'GET') {
            $name = $_GET['category_name'];
            //var_dump($name);
            $products = $this->cateModel->getAll($name);
            //var_dump($products);die();
            include 'src/View/product/list.php';
        }
    }
}