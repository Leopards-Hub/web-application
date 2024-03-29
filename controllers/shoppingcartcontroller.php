<?php
require_once 'models/shoppingmodel.php';
require_once 'models/admin/ordermodel.php';
$od = new OrderModel($db);
global $countcart;

$listOrder = new Shopping($db);
$lists = $listOrder->getOrdersList($_SESSION['user']['user_id']);

if (!isset($_SESSION["cart"])) {
    $_SESSION['cart'] = array();
}
if ((isset($_POST["addtocart"])) && ($_POST["addtocart"])) {
    $id = $_POST["dish_id"];
    $img = $_POST['images'];
    $name = $_POST["name"];
    $details = $_POST["details"];
    $price = $_POST["prices"];
    $soluong = 1;
    $flag = 0;
    $j = 0;
    foreach ($_SESSION['cart'] as $item) {
        if ($item[0] == $id) {
            if (isset($_SESSION["user"]) && isset($_SESSION["user"]["user_id"])) {
                $sp = array($id, $img, $name, $details, $price, $soluong);
                $listOrder->addToCart($sp);
            } else {
                $newsl = $soluong + $item[5];
                $_SESSION['cart'][$j][5] = $newsl;
                $flag = 1;
            }
        }
        $j++;
    }
    if ($flag == 0) {
        $sp = array($id, $img, $name, $details, $price, $soluong);
        // array_push($_SESSION['cart'], $sp);    
        if (isset($_SESSION["user"]) && isset($_SESSION["user"]["user_id"])) {
            $listOrder->addToCart($sp);
        }
    }
    if (!empty($listOrder->getCart())) {
        $_SESSION['cart'] = $listOrder->getCart();
    }
    header('location: menu');
    exit;
}
if (isset($_POST['form-type']) && $_POST['form-type'] === 'delete') {

    $od->deleteCartUser($_POST['cart_id']);
    for ($j = 0; $j < count($_SESSION['cart']); $j++) {
        if ($_SESSION['cart'][$j]['cart_id'] === $_POST['cart_id']) {
            unset($_SESSION['cart'][$j]);
        }

    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    if(isset($_POST['changequantity'])){
        $control = $_POST['changequantity'];
        if($control === 'decrease'){
            $newquantity = max(1, $_POST['quantity'] - 1);
            $newPrice = 1;
            $newPrice = $newquantity * $_POST['cartprice'];
            echo $newquantity;
            $od->updateQuantityCartID($_POST['cart1'],$newquantity);
        }
        if($control === 'increase'){
            $newquantity = max(1, $_POST['quantity'] + 1);
            $newPrice = 1;
            $newPrice = $newquantity * $_POST['cartprice'];
            $od->updateQuantityCartID($_POST['cart1'],$newquantity);
        }
    }
    header('location: shopping');
}


require_once 'views/shoppingcartview.php';

?>