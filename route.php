<?php
use App\Controller\ProductController;
use App\Controller\CustomerController;
use App\Controller\CateController;

$productController =new ProductController();
$customerController=new CustomerController();
$cateController=new CateController();

$page=$_REQUEST['page'] ?? '';
switch ($page){
    case 'product':
        $productController->index();
        break;
    case 'add-product':
        $productController->add();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'update':
        $productController->update();
        break;
    case 'search':
        $productController->search();
        break;

    case 'customer':
        $customerController->index();
        break;
    case 'customer-add':
        $customerController->add();
        break;
    case 'customer-update':
        $customerController->update();
        break;
    case 'customer-delete':
        $customerController->delete();
        break;
    case 'customer-search':
        $customerController->search();
        break;

    case 'category':
        //$id = $_GET['category_name'];
        //var_dump($id);die();

        $cateController->index();
        break;
}