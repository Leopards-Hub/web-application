<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'root/CSS/order.css.php';?>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <title>Order Page</title>

</head>

<body>
    <div>
        <?php
            include_once 'components/header.php';
        ?>
    </div>
    <main>
        <div class="container__order">
            <div class="information__order">
                <h2>Shipping Information</h2>
                <input type="text" id="name__order" placeholder="Full Name" required>
                <input type="hidden" id="customerID__order">
                <input type="email" id="email__order" placeholder="Email" required>
                <input type="text" id="phone__order" placeholder="Phone Number" required>
                <input type="text" id="address__order" placeholder="Address" required>
                <div class="location">
                    <label for="province__order">Province</label>
                    <select id="address" name="address">
                        <option value="">Province</option>
                        <option value="qt">Quang Tri</option>
                        <option value="qb">Quang Binh</option>
                        <option value="dn">Da Nang</option>
                        <option value="h">Hue</option>
                    </select>
                    <label for="district__order">District</label>
                    <select id="address" name="address">
                        <option value="">District</option>
                        <option value="st">Son Tra</option>
                        <option value="nh">138D Nguyen Hue</option>
                        <option value="cv">Cau Vuong 25B</option>
                        <option value="dk">Dakrong 1</option>
                    </select>
                </div>
                <div class="payment" id="payment">
                    <h2>Payment Method</h2>
                    <div>
                        <input type="radio" id="payment-method-cod" name="payment-method" value="cod" checked>
                        <label for="payment-method-cod">Cash on Delivery</label><br>
                    </div>
                    <!-- <div>
                        <input type="radio" id="payment-method-momo" name="payment-method" value="momo">
                        <label for="payment-method-momo">Momo</label><br>
                    </div>-->
                </div>
                <div class="btn__order__box">
                    <button id="btn__order__item" type="button" onclick="placeOrder()">Order</button>
                </div>
            </div>
            <div class="product__order" id="product__order">
                <div class="total__price__order">
                    <h3>Total Amount:</h3>
                    <h3 id="price__order">100.000 VND</h3>
                </div>
                <div class="product__order1" id="product__order1">
                    <!-- ... (Product items and information) ... -->
                </div>
                <div class="payment__qr">
                    <h3>QR Code Payment</h3>
                </div>
                <canvas id="qrcode-payment"></canvas>
                <div id="qrcode"></div>

            </div>
        </div>
    </main>
    <div>
        <?php
            include_once 'components/footer.php';
        ?>
    </div>
</body>

</html>