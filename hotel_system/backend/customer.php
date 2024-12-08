<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO Customer (Name, Phone, Email, Address) VALUES ('$name', '$phone', '$email', '$address')";
if ($conn->query($sql) === TRUE) {
    echo "Customer added successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
