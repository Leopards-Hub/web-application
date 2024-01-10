<?php 
session_start();

require_once './configs/app.php';
require_once './bootstrap..php';
$app = new App();

if(isset($_SESSION['user'])) {
    // User tồn tại trong session
    echo "User đã đăng nhập với ID: " . $_SESSION['user']['Username'];
    echo "User đã đăng nhập với ID: " . $_SESSION['user']['user_id'];
} else {
    // User không tồn tại trong session
    echo "User chưa đăng nhập";
}
?>
