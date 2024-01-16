<?php
// if(isset($_SESSION['cart'])){
//     echo var_dump($_SESSION['cart']);
// }

// if (isset($_SESSION['user'])) {
//     session_start();
// }
// if (isset($_SESSION["user"]) && isset($_SESSION["user"]["user_id"])) {
//     $user_id = $_SESSION["user"]["user_id"];
//     echo $user_id;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Bao gồm Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include 'root/CSS/shoppingcart.css.php'; ?>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
</head>

<body>
    <div>
        <?php
            include_once 'components/header.php';
        ?>
    </div>

    <div class="container cart-container">
        <div class="cart-total">
            <?php
                $total = 0;
                $i = 1;
                if(isset($_SESSION['cart']) && (count($_SESSION['cart']))>0){
                    // var_dump($_SESSION['cart'][0]);
                    foreach($_SESSION['cart'] as $item){
                        $total += $item['quantity'] * $item['price'];
                        $i++;
                        
                    }
                }
            ?>
            <h5 class= "price">Total: $<?php echo $total; ?> </h5>
            <button class="btn btn-checkout">Checkout</button>
        </div>
            <?php
                // $bienSoLuongAddToCart = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

                // // Kiểm tra xem có sự kiện nút đã được nhấn không
                // if (isset($_POST['submit'])) {
                // // Kiểm tra xem nút nào đã được nhấn
                //     if ($_POST['submit'] == '-') {
                //         // Giảm giá trị nếu nút '-' được nhấn
                //         $bienSoLuongAddToCart = max(1, $bienSoLuongAddToCart - 1);
                //         $newsl = max ($newsl - $bienSoLuongAddToCart);
                //         $_SESSION['cart'][$j][5] = $newsl;
                //     } elseif ($_POST['submit'] == '+') {
                //         // Tăng giá trị nếu nút '+' được nhấn
                //         $bienSoLuongAddToCart += 1;
                //         $newsl = max ($newsl - $bienSoLuongAddToCart);
                //         $_SESSION['cart'][$j][5] = $newsl;
                //     }
                // }
                $total = 0;
                $i = 1;
                if(isset($_SESSION['cart']) && (count($_SESSION['cart']))>0){
                    // var_dump($_SESSION['cart'][0]);
                    foreach($_SESSION['cart'] as $item){
                        $total += $item['quantity'] * $item['price'];
                        showcart($item,$i);
                        $i++;
                        
                    }
                }

                
            ?>
        <!-- <div class="cart-item">
            <div class="row">
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <h5>1</h5>
                </div>
                <div class="col-md-3">
                    <img src="https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1551783604684-AE2UE7DYUGV96DUT4G80/chup-anh-thuc-an-1.jpg" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="1">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div> -->
        <a href="menu">ADD MORE</a>
    </div>
    <div>
        <?php
        include_once 'components/footer.php';
        ?>
    </div>
    <!-- Bao gồm Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function increaseQuantity(button) {
            var input = button.parentNode.querySelector('input');
            var value = parseInt(input.value, 10);
            input.value = value + 1;
        }

        function decreaseQuantity(button) {
            var input = button.parentNode.querySelector('input');
            var value = parseInt(input.value, 10);
            if (value > 1) {
                input.value = value - 1;
            }
        }

        function removeItem(button) {
            var cartItem = button.closest('.cart-item');
            cartItem.remove();
        }
    </script>
</body>

</html>