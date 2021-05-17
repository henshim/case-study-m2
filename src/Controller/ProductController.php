<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
    }

    function index()
    {
        $products = $this->productModel->getAll();
        include 'src/View/product/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/product/add.php';
        } else {
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($_FILES["img"]["name"]);
            move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
            $product = new Product($_POST['product_name'],
                                    $_POST['price'],
                                    $_POST['status'],
                                    $_POST['description'],
                                    $targetFile,
                                    $_POST['category_id']);
            $this->productModel->create($product);
            header("Location: index.php?page=product");
        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $this->productModel->delete($id);
        header('Location: index.php?page=product');
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            //var_dump($id);
            $product = $this->productModel->get($id);
            //var_dump($product);
            include 'src/View/product/update.php';
        } else {
            $errors = [];
            $fields = ['product_name', 'price', 'status', 'description', 'category_id'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Do not leave it blank!!!';
                }
            }
            $id = $_POST['product_id'];
            if (empty($errors)) {
                //upload file
                //B1 kiem tra co file k?
                $targetDir = "upload/";
                $targetFile = $targetDir . basename($_FILES["img"]["name"]);
                //upload file
                move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
                $product = new Product($_POST['product_name'],
                    $_POST['price'],
                    $_POST['status'],
                    $_POST['description'],
                    $targetFile, $_POST['category_id']);
                //var_dump($product);
                $this->productModel->update($id, $product);
                header('Location: index.php?page=product');
            } else {
                $product = $this->productModel->get($id);
                include 'src/View/product/update.php';
            }
        }
    }

    function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($search = $_POST['search']) {
                $products = $this->productModel->search($search);
                include 'src/View/product/list.php';
            }
        }
    }
}