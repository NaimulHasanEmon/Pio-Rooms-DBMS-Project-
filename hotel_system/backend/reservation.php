<?php
include 'db.php';

$customer_id = $_POST['customer_id'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$status = $_POST['status'];

// Insert into the Reservation table
$sql = "INSERT INTO Reservation (CustomerID, CheckInDate, CheckOutDate, Status) 
        VALUES ('$customer_id', '$check_in', '$check_out', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation created successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
