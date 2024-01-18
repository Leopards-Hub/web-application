<?php


// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}

require_once 'models/booktablemodel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user']['user_id'];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $fullName = $_POST["fullname"];
    $phone = $_POST["phone"];
    $numGuests = $_POST["num-guests"];

    // Kiểm tra các trường dữ liệu
    $fullNameError = validate_fullName($fullName);
    $dateError = validate_date($date);
    $timeError = validate_time($time);
    $phoneError = validate_phone($phone);

    // Kiểm tra nếu có lỗi từ các hàm validate
    if (!empty($fullNameError) || !empty($dateError) || !empty($timeError) || !empty($phoneError)) {
        // Hiển thị thông báo lỗi
        include "views/BookTableView.php";
        exit();
    }

    $createBooking = createdBooking($date, $time, $fullName, $phone, $numGuests, $user_id ,$db);

    if ($createBooking) {
        $_SESSION['bookingSuccess'] = true;
    } else {
        $_SESSION['bookingSuccess'] = false;
    }

    // Redirect to the next page
    header("Location: booktable");
    exit();
}

require_once 'views/BookTableView.php';
?>