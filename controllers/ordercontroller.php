<?php
// use function PHPSTORM_META\map;
include_once 'models/admin/ordermodel.php';
$od = new OrderModel($db);
$dataUser = $od->getDetailUser($_SESSION['user']['user_id']);
require_once 'views/orderview.php';

if (isset($_POST['payUrl'])){
    $_SESSION['orderInform']['name']= $_POST['name'];
    $_SESSION['orderInform']['email']= $_POST['email'];
    $_SESSION['orderInform']['phone']= $_POST['phone'];
    $_SESSION['orderInform']['address']= $_POST['address'];
}
 $cartName="";
 $cartPrice=0;
 $cartQuantity=0;
 $totalPrice = 0;
 foreach(($_SESSION['cart']) as $carts){
    $cartName = $carts[2];
    $cartPrice = intval($carts[4]);
    $cartQuantity = intval($carts[5]);
    $totalPrice += intval($cartPrice)*intval($cartQuantity);
}
$_SESSION['orderInform']['price'] = $totalPrice;
if (isset($_POST['payUrl']) || isset($_POST['payCOD'])) {
    if (isset($_SESSION['user'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['payUrl'])) {

                function execPostRequest($url, $data)
                {
                    $ch = curl_init($url);
                    var_dump($ch);
                    if ($ch === false) {
                        die('Curl initialization failed');
                    }
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt(
                        $ch,
                        CURLOPT_HTTPHEADER,
                        array(
                            'Content-Type: application/json',
                            'Content-Length: ' . strlen($data)
                        )
                    );
                    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

                    // Execute post
                    $result = curl_exec($ch);

                    if ($result === false) {
                        die('Curl execution failed: ' . curl_error($ch));
                    }

                    // Close connection
                    curl_close($ch);

                    return $result;
                }
                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


                $partnerCode = 'MOMOBKUN20180529';
                $accessKey = 'klm05TvNBzhg7h7j';
                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                $orderInfo = "Thanh toán qua MoMo";
                $amount = intval($_POST['amount'])*20000;
                $nameUser = $_POST['name'];
                $orderId = time() . "";
                $redirectUrl = "http://localhost/web-application/thankyou";
                $ipnUrl = "http://localhost/web-application/order";
                $extraData = "";

                $partnerCode = $partnerCode;
                $accessKey = $accessKey;
                $serectkey = $secretKey;
                $orderId = $orderId; // Mã đơn hàng
                $orderInfo = $orderInfo;
                $amount = $amount;
                $ipnUrl = $ipnUrl;
                $redirectUrl = $redirectUrl;
                $extraData = $extraData;

                $requestId = time() . "";
                $requestType = "payWithATM";
                // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                //before sign HMAC SHA256 signature
                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                $signature = hash_hmac("sha256", $rawHash, $serectkey);
                $data = array(
                    'partnerCode' => $partnerCode,
                    'partnerName' => "Test",
                    "storeId" => "MomoTestStore",
                    'requestId' => $requestId,
                    'amount' => $amount,
                    'orderId' => $orderId,
                    'orderInfo' => $orderInfo,
                    'redirectUrl' => $redirectUrl,
                    'ipnUrl' => $ipnUrl,
                    'lang' => 'vi',
                    'extraData' => $extraData,
                    'requestType' => $requestType,
                    'name' => $nameUser,
                    'signature' => $signature
                );
                $result = execPostRequest($endpoint, json_encode($data));
                $jsonResult = json_decode($result, true);

                if (isset($jsonResult['payUrl'])) {
                    // Redirect using JavaScript
                    echo "<script>window.location.href = '" . $jsonResult['payUrl'] . "';</script>";
                    exit();
                } else {
                    echo "Error: Missing payUrl in the response.";
                }
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['payCOD'])) {
            //handle POST request
            echo '<script>alert("đơn hàng của bạn đang được giao");</script>';
            $dish_name = $_SESSION['cart'][0][2];
            $dish = $od->getDetailDish($dish_name);
            $totalprice = $_SESSION['orderInform']['price'];

            $order = [
                "user_id" => $_SESSION['user']['user_id'],
                "order_date" => $od->getCurrentDateTime(),
                "status" => "pending",
                "delivery_date" => null,
                "discount" => 0,
            ];
            
            // Prepare data for order_detail table
            $orderdetail = [
                "dish_id" => $dish['dish_id'],
                "dish_name" => $_SESSION['cart'][0][2],
                "price" => $dish['Price'],
                "quantity" => $_SESSION['cart'][0][5],
                "total_price" => $totalprice,
                "address" =>  $_SESSION['orderInform']['address'],
                "phone" =>  $_SESSION['orderInform']['phone'],
                "payment"=>"COD",
            ];
            $od->createOrder($order, $orderdetail);
            unset($_SESSION['cart']);
            unset($_SESSION['orderInform']);


            echo '<script>window.location.href = "shopping";</script>';
            exit();
        }
    } else {
        echo '<script>alert("Please login");</script>';
        echo '<script>window.location.href = "login";</script>';
        exit();
    }
}
?>