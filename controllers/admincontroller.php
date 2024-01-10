<?php
    include 'models/contactmodel.php';
    include_once 'models/adminmodel.php';
    $contact = new Contact($db);
    $data = $contact->fetchAll();
    $admin = new Admin($db);
    $allUsers = $admin->getTotalUsersCount();
    $allOrders = $admin->getTotalOrdersCount();
    require_once 'views/adminview.php';
    
