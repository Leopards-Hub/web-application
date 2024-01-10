<?php
    require_once 'models/shoppingmodel.php';
    
    if ((isset($_POST["addtocart"]) && $_POST["addtocart"])){
        echo"HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH";
        $img = $_POST['images'];
        $name = $_POST["name"];
        $details = $_POST["details"];
        $price = $_POST["prices"];
    }

    $sp = array($img,$name,$details,$price);
    if (!isset($_SESSION["cart"])){
        $_SESSION['cart'] = array();
    }
    array_push( $_SESSION['cart'], $sp);
    header('location: shoppingcartview.php');
    // session_start();
    // if(isset($_SESSION['cart'])){
    //     echo "có kết nối csdl";
    // }
    
// Update the instantiation line
    require_once 'views/shoppingcartview.php';

?>