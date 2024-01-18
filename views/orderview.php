<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'root/CSS/order.css.php'; ?>
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
            <form class="" method="post" onsubmit="return confirm('xác nhận thanh toan')" action="" >
                <div class="information__order">
                    <h2>Shipping Information</h2>
                    <input type="text" id="name__order" placeholder="Full Name" name="name" value="<?php echo $dataUser[0]['Name'];?>"  >
                    <input type="hidden" id="customerID__order">
                    <input type="email" id="email__order" placeholder="Email" name="email" value="<?php echo$dataUser[0]['Email'];?>"  >
                    <input type="text" id="phone__order" placeholder="Phone Number" name="phone"  value="<?php echo$dataUser[0]['Phone'];?>"  >
                    <input type="text" id="address__order" placeholder="Address" name="address" required >

                    <div class="total__price__order">
                        <h3>Total Amount:</h3>
                        <!-- <h3 id="price__order"  >100.000 VND</h3> -->
                        <input type="number" readonly value="<?php echo $_POST['price'];?>" name="amount" style="border: none; pointer-events: none; " >
                        <!-- <input type="hidden" value="300" name="price" > -->
                    </div>
                    <h2>Payment Method</h2>
                    <div class="payment d-flex flex-column " id="payment">
                        <button class="btn active" type="submit" name="payUrl" >MOMO</button>
                        <button class="btn active" type="submit" name="payCOD" >Cash On Delivery</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
    <div>
        <?php
        include_once 'components/footer.php';
        ?>
    </div>
</body>

</html>