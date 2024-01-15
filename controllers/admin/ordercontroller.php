<?php

include_once 'models/admin/ordermodel.php';
$od = new OrderModel($db);
$data = $od->fetchAll();
$dataone = $od->fetchOne($id);
require_once 'views/admin/orderview.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = isset($_POST['form_type']) ? $_POST['form_type'] : '';

    if ($formType === 'create') {
        $id = $od->getId($_POST['username']);
        $dish = $od->getDetailDish($_POST['dish_name']);
        
        $detailUser = $od->getDetailUser($id);
        echo '<pre>'; print_r($detailUser); echo '</pre>';
        // Check if $id and $dish are valid before proceeding
        if (!$id || !$dish) {
            // Handle the case where data retrieval fails
            echo "Error retrieving user or dish data.";
            exit();
        }
        
        // Calculate total price
        $totalprice = $od->getTotalPrice((float)$dish['Price'], (float)$_POST['quantity'], (float)$_POST['discount']);
        
        // Prepare data for orders table
        $order = [
            "user_id" => $id[0]['user_id'],
            "order_date" => $od->getCurrentDateTime(),
            "status" => $_POST['status'],
            "delivery_date" => $_POST['deliverydate'],
            "discount" => $_POST['discount'],
        ];
        
        // Prepare data for order_detail table
        $orderdetail = [
            "dish_id" => $dish['dish_id'],
            "dish_name" => $_POST['dish_name'],
            "price" => $dish['Price'],
            "quantity" => $_POST['quantity'],
            "total_price" => $totalprice,
            "address" => $_POST['address'],
            "phone" => $detailUser[0]['Phone'],
            "payment"=>"COD",
        ];
        
        // Call the createOrder function
        $od->createOrder($order, $orderdetail);
        
    } elseif ($formType === 'delete') {
        $id = $_POST['order_id'];
        $od->deleteOrder($id);
    } 
    
    elseif ($formType === 'update') {
        $id = $_POST['id'];
        $user_id = $od->getId($_POST['username']);

        $totalprice = $od->getTotalPrice($_POST['price'],$_POST['quantity'],$_POST['discount']);
        $order = [
            "user_id" => $user_id[0]['user_id'],
            "order_date" => $_POST['orderdate'],
            "status" => $_POST['status'],
            "delivery_date" => $_POST['deliverydate'],
            // "user_id" => $_POST['user_id'],
            "discount" => $_POST['discount'],
        ];
        $orderdetail=[
            "dish_id"=>$_POST['dish_id'],
            "dish_name"=>$_POST['dish_name'],
            "price"=>$_POST['price'],
            "quantity"=>$_POST['quantity'],
            "total_price"=>$totalprice,
        ];
        $od->updateOrder($id, $order,$orderdetail);
        
    }
}

