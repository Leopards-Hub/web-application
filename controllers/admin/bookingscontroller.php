<?php
require_once "models/admin/bookingsmodel.php";
$bookings = getAllBookings($db);
require_once "views/admin/bookingsview.php";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept'])) {
        // Lấy thông tin booking từ $_POST
        $bookingId = $_POST['booking_id'];

        // Truy vấn dữ liệu từ bảng `Table`
        $selectQuery = $db->prepare("SELECT table_id FROM `Table` WHERE status = 'available'");
        $selectQuery->execute();
        $tables = $selectQuery->fetchAll(PDO::FETCH_ASSOC);

        // Thực hiện các thao tác khi chấp nhận
        if (!empty($tables)) {
            // Lấy thông tin bàn và booking
            $tableId = $tables[0]['table_id'];
            unset($tables[0]);
            $tables = array_values($tables);
            $booking = getBookingById($db, $bookingId);
            $bookingDatetime = date('Y-m-d H:i:s', strtotime($booking['date'] . ' ' . $booking['time']));

            // Chèn dữ liệu vào bảng đích (Booktable)
            $insertStatement = $db->prepare("INSERT INTO Booktable (`User_id`, `Table_id`, `time`, `phone`, `num_guests`) VALUES (:User_id, :tableId, :bookingTime, :phone, :numGuests)");
            $insertStatement->bindValue(':User_id', $booking['User_id']);
            $insertStatement->bindValue(':tableId', $tableId);
            $insertStatement->bindValue(':bookingTime', $bookingDatetime);
            $insertStatement->bindValue(':phone', $booking['phone']);
            $insertStatement->bindValue(':numGuests', $booking['numGuests']);
            $insertStatement->execute();

            // Xóa booking đã được chấp nhận
            $deleteStatement = $db->prepare("DELETE FROM bookings WHERE id = :bookingId");
            $deleteStatement->bindValue(':bookingId', $bookingId);
            $deleteStatement->execute();

            // Cập nhật trạng thái của bàn trong bảng "Table" thành "occupied"
            $updateStatement = $db->prepare("UPDATE `Table` SET status = 'occupied' WHERE table_id = :tableId");
            $updateStatement->bindValue(':tableId', $tableId);
            $updateStatement->execute();
            // gui email
                 // Gửi email thông báo chấp nhận booking
                 $mail = new PHPMailer(true);
                 try {
                     // Cấu hình thông tin SMTP
                     $mail->isSMTP();
                     $mail->Host = 'smtp.gmail.com';
                     $mail->SMTPAuth = true;
                     $mail->Username = 'hue.ho25@student.passerellesnumeriques.org';
                     $mail->Password = 'f w m d x u z t h j f k b h g z';
                     $mail->SMTPSecure = 'tls';
                     $mail->Port = 587;
     
                     // Lấy thông tin email của khách hàng từ user_id
                     $userEmail = ''; // Khởi tạo biến lưu trữ email của khách hàng
                     $bookingUserId = $booking['User_id']; // Giả sử user_id lưu trong bảng bookings là $booking['User_id']
                     
                     // Truy vấn cơ sở dữ liệu để lấy thông tin email của khách hàng từ bảng Users
                     $query = "SELECT Email FROM Users WHERE user_id = :user_id";
                     $stmt = $db->prepare($query);
                     $stmt->bindParam(':user_id', $bookingUserId);
                     $stmt->execute();
                     $userEmail = $stmt->fetchColumn();
     
                                        // Lấy thông tin từ biến
                    $fullName = $booking['fullName'];

                    // Tạo nội dung email
                    $message = "
                    Dear $fullName,

                    We are pleased to inform you that your booking has been accepted.

                    Booking Details:
                    - Full Name: $fullName
                    - Booking Date: {$booking['date']}
                    - Booking Time: {$booking['time']}

                    We look forward to serving you. 
                    If you have any further questions or need assistance, please feel free to contact us. Thank you for considering our services.';


                    Best regards,
                    Ho Thi Hue
                    ";

                    // Cấu hình thông tin email
                    $mail->setFrom('hue.ho25@student.passerellesnumeriques.org', 'Ho Thi Hue');
                    $mail->addAddress($userEmail, $booking['fullName']); // Sử dụng email lấy được từ truy vấn cơ sở dữ liệu
                    $mail->Subject = 'Booking Accepted';
                    $mail->Body = $message;
     
                     // Gửi email
                     $mail->send();
     
                     echo "The booking has been accepted and inserted into the Booktable table successfully!";
                     echo '<script>window.location.href = "booktable";</script>';
                 } catch (Exception $e) {
                     echo "An error occurred while sending email: " . $mail->ErrorInfo;
                 }
            
        }
    }

    if (isset($_POST['reject'])) {
        // Lấy thông tin booking từ $_POST
        $bookingId = $_POST['booking_id'];

        // Xóa booking đã được từ chối
        $deleteStatement = $db->prepare("DELETE FROM bookings WHERE id = :bookingId");
        $deleteStatement->bindValue(':bookingId', $bookingId);
        $deleteStatement->execute();
        //gui email 
            $mail = new PHPMailer(true);
            try {
                // Cấu hình thông tin SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'hue.ho25@student.passerellesnumeriques.org';
                $mail->Password = 'f w m d x u z t h j f k b h g z';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Lấy thông tin email của khách hàng từ user_id
                $userEmail = ''; // Khởi tạo biến lưu trữ email của khách hàng
                $bookingUserId = $booking['User_id']; // Giả sử user_id lưu trong bảng bookings là $booking['User_id']
                
                // Truy vấn cơ sở dữ liệu để lấy thông tin email của khách hàng từ bảng Users
                $query = "SELECT Email FROM Users WHERE user_id = :user_id";
                $stmt = $db->prepare($query);
                $stmt->bindParam(':user_id', $bookingUserId);
                $stmt->execute();
                $userEmail = $stmt->fetchColumn();

                                   // Lấy thông tin từ biến
               $fullName = $booking['fullName'];

               // Tạo nội dung email
               $message = "
               Dear $fullName,

               we regret to inform you that your booking has been rejected.

               Booking Details:
               - Full Name: $fullName
               - Booking Date: {$booking['date']}
               - Booking Time: {$booking['time']}

            We look forward to serving you. 
            If you have any further questions or need assistance, please feel free to contact us. Thank you for considering our services.';


               Best regards,
               Ho Thi Hue
               ";

               // Cấu hình thông tin email
               $mail->setFrom('hue.ho25@student.passerellesnumeriques.org', 'Ho Thi Hue');
               $mail->addAddress($userEmail, $booking['fullName']); // Sử dụng email lấy được từ truy vấn cơ sở dữ liệu
               $mail->Subject = 'Booking Rejected';
               $mail->Body = $message;

                // Gửi email
                $mail->send();

                    
                echo "Your booking has been rejected!";
                echo '<script>window.location.href = "bookings";</script>';
            } catch (Exception $e) {
                echo "An error occurred while sending email: " . $mail->ErrorInfo;
            }
    }
}
?>