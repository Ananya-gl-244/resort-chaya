<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "apjabdul96@gmail.com"; 
    $subject = "New Room Booking";
    $message = "Name: " . $_POST['name'] . "\n" .
               "Email: " . $_POST['email'] . "\n" .
               "Phone: " . $_POST['phone'] . "\n" .
               "Check-in: " . $_POST['check_in'] . "\n" .
               "Check-out: " . $_POST['check_out'] . "\n" .
               "Room Type: " . $_POST['room_type'] . "\n" .
               "Message: " . $_POST['message'];

    $headers = "From: " . $_POST['email'];

    mail($to, $subject, $message, $headers);
}
?>