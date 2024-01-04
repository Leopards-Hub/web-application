<?php

include_once 'models/admin/ordermodel.php';
$od = new OrderModel($db);
$data = $od->fetchAll();

require_once 'views/admin/orderview.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = isset($_POST['form_type']) ? $_POST['form_type'] : '';

    if ($formType === 'create') {
        $id = $od->getId($_POST['username']);

        $value = [
            "user_id" => $id[0]['user_id'],
            "order_date" => $_POST['orderdate'],
            "status" => $_POST['status'],
            "delivery_date" => $_POST['deliverydate'],
            // "user_id" => $_POST['user_id'],
            "discount" => $_POST['discount'],
        ];
        $od->createOrder($value);
    } elseif ($formType === 'delete') {
        $id = $_POST['order_id'];
        $od->deleteOrder($id);
    } elseif ($formType === 'update') {

    }
}


