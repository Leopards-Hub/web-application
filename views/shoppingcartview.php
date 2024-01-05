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
            <h5>Total: $69.97</h5>
            <button class="btn btn-checkout">Checkout</button>
        </div>
        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1551783604684-AE2UE7DYUGV96DUT4G80/chup-anh-thuc-an-1.jpg" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://top10quangbinh.vn/wp-content/uploads/2022/10/anh-do-an-1.jpg" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://voz.vn/attachments/1631488612434-jpg.763083/" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://voz.vn/attachments/1631488612434-jpg.763083/" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://voz.vn/attachments/1631488612434-jpg.763083/" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://voz.vn/attachments/1631146943014-jpg.763084/" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>Product Title</h4>
                    <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Price: $19.99</p>
                    <div class="cart-actions">
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity(this)">-</button>
                            <input type="text" value="2">
                            <button class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity(this)">+</button>
                        </div>
                        <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                        <label class="checkbox-label" for="checkbox-id">
                            <input type="checkbox" class="checkbox" id="checkbox-id">
                        </label>
                    </div>
                </div>
            </div>
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
    </script>
</body>
</html>
