<?php
    require_once 'models/shoppingmodel.php';
    require_once 'models/admin/ordermodel.php';
    $od = new OrderModel($db);
   
    $listOrder = new Shopping($db);
    $lists = $listOrder->getOrdersList($_SESSION['user']['user_id']);

    if (!isset($_SESSION["cart"])){
        $_SESSION['cart'] = array();
    }
    if ((isset($_POST["addtocart"])) && ($_POST["addtocart"])){
        $id = $_POST["dish_id"];
        $img = $_POST['images'];
        $name = $_POST["name"];
        $details = $_POST["details"];
        $price = $_POST["prices"];
        $soluong = 1;
        $flag =0;

        $j=0;
        
        foreach($_SESSION['cart'] as $item){
            if($item[0] == $id){                
                if (isset($_SESSION["user"]) && isset($_SESSION["user"]["user_id"])) {
                    $sp = array($id, $img, $name, $details, $price, $soluong);
                    $listOrder->addToCart($sp);
                }
                
                else{
                    $newsl = $soluong + $item[5];
                    $_SESSION['cart'][$j][5] = $newsl;                
                    $flag = 1;
                }
            }
            $j++;
        }
        if($flag == 0){
            $sp = array($id, $img, $name, $details, $price, $soluong);
            // array_push($_SESSION['cart'], $sp);    
            if (isset($_SESSION["user"]) && isset($_SESSION["user"]["user_id"])) {
                $listOrder->addToCart($sp);
            }
        }
        
        if (!empty($listOrder->getCart())){            
            $_SESSION['cart'] = $listOrder->getCart();
        }
        
        
        header('location: menu');
        exit;
    }
    if(isset($_POST['form-type']) && $_POST['form-type']=== 'delete'){

        $od->deleteCartUser($_POST['user_id']);
        unset($_SESSION['cart']); 
        header('location: menu');
    }
    require_once 'views/shoppingcartview.php';

    // $bienSoLuongAddToCart = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

            //     // Kiểm tra xem có sự kiện nút đã được nhấn không
            //     if (isset($_POST['submit'])) {
            //     // Kiểm tra xem nút nào đã được nhấn
            //         if ($_POST['submit'] == '-') {
            //             // Giảm giá trị nếu nút '-' được nhấn
            //             $bienSoLuongAddToCart = max(1, $bienSoLuongAddToCart - 1);
            //             $newsl = max ($newsl - $bienSoLuongAddToCart);
            //             $_SESSION['cart'][$j][5] = $newsl;
            //         } elseif ($_POST['submit'] == '+') {
            //             // Tăng giá trị nếu nút '+' được nhấn
            //             $bienSoLuongAddToCart += 1;
            //             $newsl = max ($newsl - $bienSoLuongAddToCart);
            //             $_SESSION['cart'][$j][5] = $newsl;
            //         }

        
    
    // echo "jdfgbhfh";
// Update the instantiation line
    // if(!isset($_SESSION['user'])){
    //     // echo '<script> alert("Please login");</script>';

    //     header('location: menu');
    //     exit();
    //     // header('location: menu');
    //     // exit();

    // }else{
        
    //     // require_once 'views/shoppingcartview.php';
    // }
    // if()
    // unset($_SESSION['cart']); 
    // session_destroy();

?>