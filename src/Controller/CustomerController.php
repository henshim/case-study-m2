<?php


namespace App\Controller;

use App\Model\Customer;
use App\Model\CustomerModel;

class CustomerController
{
    protected $customerModel;

    function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    function index()
    {
        $customers = $this->customerModel->getAll();
        include 'src/View/customer/list.php';
    }

    function add()
    {
        //var_dump(123);die();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            //var_dump(123);die();
            include_once 'src/View/customer/add.php';
        } else {
            //var_dump(123);die();
            $errors = [];
            $fields = ['customer_name', 'address', 'phone', 'status'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'null not allowed';
                }
            }

            if (empty($errors)) {
                //var_dump(123);die();
                //var_dump($customer = new Customer($_POST['customer_name'], $_POST['address'], $_POST['phone'], $_POST['status']));die();
                $customer = new Customer($_POST['customer_name'], $_POST['address'], $_POST['phone'], $_POST['status']);
                //var_dump($this->customerModel->create($customer));die();
                $this->customerModel->create($customer);
                header('Location: index.php?page=customer');
            }
        }
    }

    function delete()
    {
        $id = $_GET['customer_id'];
        $this->customerModel->delete($id);
        header('Location: index.php?page=customer');
    }

    function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['customer_id'];
            $customer = $this->customerModel->get($id);
            include 'src/View/customer/update.php';
        } else {
            $id = $_POST['customer_id'];
            //var_dump($id);
                $customer = new Customer($_POST['customerName'],
                    $_POST['address'],
                    $_POST['phone'],
                    $_POST['status']);
              //  var_dump($customer);die();
                $this->customerModel->update($id, $customer);
                //var_dump($result);
                header('Location: index.php?page=customer');
            }
        }

    function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($search = $_POST['search']) {
                $customers = $this->customerModel->search($search);
                include 'src/View/customer/list.php';
            }
        }
    }
}