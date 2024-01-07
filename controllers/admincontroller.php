<?php
    include 'models/contactmodel.php';
    $contact = new Contact($db);
    $data = $contact->fetchAll();
    require_once 'views/adminview.php';
    
