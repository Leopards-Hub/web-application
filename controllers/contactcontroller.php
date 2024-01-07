<?php
    include 'models/contactmodel.php';
    $contact = new Contact($db);

    require_once 'views/ContactView.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $values= [
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'subject' =>$_POST['subject'],
            'message' =>$_POST['message'],
        ];
        $contact->createContact($values);
        if ($contact==true){
            echo '<script>alert("Thank you your feedback!")</script>';
            header('Location:contact');
        }
    }


