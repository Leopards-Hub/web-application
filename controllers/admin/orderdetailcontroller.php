<?php
    include 'models/admin/orderdetailmodel.php';
    $orderdetail = new Orderdetailmodel($db);

    $data = $orderdetail->fetchAll();

    $id = $_GET['id'];

    $array = $orderdetail->fetchOne($id);

    require_once 'views/admin/orderdetailview.php';
