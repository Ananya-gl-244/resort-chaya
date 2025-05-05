<?php
include 'dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room_type = $_POST['room_type'];
    $message = $_POST['message'];

    $stmt = $con->prepare("INSERT INTO bookings (name, email, phone, check_in, check_out, room_type, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $check_in, $check_out, $room_type, $message]);

    header("Location: book-success.html");
    exit();
}
?>