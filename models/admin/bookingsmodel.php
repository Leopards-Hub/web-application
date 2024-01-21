<?php
require_once './database/database.php';

function getAllBookings($db) {
    $statement = $db->prepare("SELECT * FROM bookings");
    $statement->execute();
    return $statement->fetchAll();
}
function getBookingById($db, $bookingId) {
    $statement = $db->prepare("SELECT * FROM bookings WHERE id = ?");
    $statement->execute([$bookingId]);
    return $statement->fetch();
//sua
}

?>