<?php
    require_once 'models/admin/ordermodel.php';
    $od = new OrderModel($db);
    
    $address = $_SESSION['orderInform']['address'];
    $phone = $_SESSION['orderInform']['phone'];
    $totalPrice = $_GET['amount'];
    $cartQuantity = $_SESSION['cart'][0]['price'];
    echo "<pre>"; print_r($_SESSION['cart']);echo '</pre>';
    require_once 'views/thankyou.php';
    if(isset($_GET['partnerCode'])){
        $dish_name = $_SESSION['cart'][0]['dish_name'];
        $dish = $od->getDetailDish($dish_name);
        $totalprice = $_SESSION['orderInform']['price'];

        $order = [
            "user_id" => $_SESSION['user']['user_id'],
            "order_date" => $od->getCurrentDateTime(),
            "status" => "pending",
            "delivery_date" => null,
            "discount" => 0,
        ];
        
        // Prepare data for order_detail table
        $orderdetail = [
            "dish_id" => $dish['dish_id'],
            "dish_name" => $_SESSION['cart'][0]['dish_name'],
            "price" => $dish['Price'],
            "quantity" => $_SESSION['cart'][0]['quantity'],
            "total_price" => $totalprice,
            "address" =>  $_SESSION['orderInform']['address'],
            "phone" =>  $_SESSION['orderInform']['phone'],
            "payment"=>"Momo",
        ];
        $od->createOrder($order, $orderdetail);
        $od->deleteCartUser($_SESSION['user']['user_id']);
        unset($_SESSION['cart']);
        unset($_SESSION['orderInform']);
        

    }