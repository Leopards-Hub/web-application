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
                    foreach($_SESSION['cart'] as $item){
                        $total += $item['quantity'] * $item['price'];
                        $i++;
                    }
                }
            ?>
            
                <form action="" method="" id="form" > 
                <label for="price"><b>Total Price: $</b></label>
                    <input style = "color:red; border:none; font-weight: bold;" type="number" name="price" id="price" value="<?php echo $total; ?>" readonly  style="border: none; pointer-events: none; "  >
                <button id="checkout" class="btn btn-checkout">Checkout</button>
                </form>
            
        </div>
            <?php
                $total = 0;
                $i = 1;
                if(isset($_SESSION['cart']) && (count($_SESSION['cart']))>0){
                    foreach($_SESSION['cart'] as $item){
                        $total += $item['quantity'] * $item['price'];
                        showcart($item,$i);
                        $i++;
                        
                    }
                }
            ?>
        <a href="menu">ADD MORE</a>
        </div>
    </div>
    <div class="container bg-white p-5" id="renderOrder">
        <h3>Your order</h3>
        <div class="container-fluid">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Dish name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Price</th>
                <th>Payment method</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lists as $list){ ?>
                <tr>
                    <td><?php echo $list['dish_name'];?></td>
                    <td><?php echo $list['quantity'];?></td>
                    <td><?php echo $list['status'];?></td>
                    <td>$<?php echo $list['total_price'];?></td>
                    <td><?php echo $list['payment'];?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
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
        let checkout = document.getElementById('checkout');
    checkout.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default form submission behavior

        const price = document.getElementById('price').value;

        if (parseInt(price) > 0) {
            console.log(price);
            const form = document.getElementById('form');
            form.action = 'order'; // Replace 'your_processing_script.php' with your actual processing script
            form.method = 'post'; // Set the method to 'post' if needed
            form.submit(); // Submit the form
        } else {
            alert('Please choose a product to purchase');
        }
    });

    </script>
</body>

</html>