<?php 
session_start();

require_once './configs/app.php';
require_once './bootstrap..php';
$app = new App();

if(isset($_SESSION['user'])) {
    // User tồn tại trong session
    echo '<pre>'; print_r($_SESSION['user']);echo '</pre>';
    echo "User đã đăng nhập với ID: " . $_SESSION['user']['Username'];
    echo "User đã đăng nhập với ID: " . $_SESSION['user']['user_id'];
    echo var_dump($_SESSION['user']['role']);
} else {
    // User không tồn tại trong session
    echo "User chưa đăng nhập";
}

?>
