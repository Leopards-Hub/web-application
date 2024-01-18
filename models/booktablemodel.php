<?php
require_once "database/database.php";
function validate_date($date)
{
    if (strtotime($date) >= strtotime(date('Y-m-d'))) {
        return ""; // Không có lỗi, trả về chuỗi rỗng
    }

    return "Date must be a future date."; // Trả về thông báo lỗi
}

function validate_time($time)
{
    if (strtotime($time) >= strtotime(date('H:i'))) {
        return ""; // Không có lỗi, trả về chuỗi rỗng
    }

    return "Time must be a future time."; // Trả về thông báo lỗi
}

function validate_fullName($fullName)
{
    // Loại bỏ khoảng trắng ở đầu và cuối chuỗi
    $trimmedFullName = trim($fullName);

    // Kiểm tra xem có ít nhất một ký tự chữ cái và không chứa ký tự đặc biệt
    if (preg_match('/^[\p{L} ]+$/u', $trimmedFullName)) {
        return ""; // Không có lỗi, trả về chuỗi rỗng
    }

    return "Full Name must contain at least one letter and not contain special characters."; // Trả về thông báo lỗi
}



function validate_phone($phone)
{
    if (preg_match('/^\d{10}$/', $phone)) {
        return ""; // Không có lỗi, trả về chuỗi rỗng
    }

    return "Phone number must be 10 digits."; // Trả về thông báo lỗi
}
function createdBooking($date, $time, $fullName, $phone, $numGuests, $user_id, $db): bool
{
    $statement = $db->prepare("INSERT INTO bookings (user_id, date, time, fullName, phone, numGuests) VALUES (?, ?, ?, ?, ?, ?)");
    $createBooking = $statement->execute([$user_id, $date, $time, $fullName, $phone, $numGuests]);

    return $createBooking;
}
