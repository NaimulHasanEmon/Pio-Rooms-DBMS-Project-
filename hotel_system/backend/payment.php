<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['reservation_id'], $_POST['payment_method'], $_POST['payment_date'], $_POST['amount'])) {
    $reservation_id = $_POST['reservation_id'];
    $payment_method = $_POST['payment_method'];
    $payment_date = $_POST['payment_date'];
    $amount = $_POST['amount'];

    $check_reservation = "SELECT * FROM Reservation WHERE ReservationID = '$reservation_id'";
    $result = $conn->query($check_reservation);

    if ($result->num_rows > 0) {
        $sql = "INSERT INTO Payment (ReservationID, PaymentMethod, PaymentDate, Amount) 
                VALUES ('$reservation_id', '$payment_method', '$payment_date', '$amount')";

        if ($conn->query($sql) === TRUE) {
            echo "Payment recorded successfully.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: Reservation ID does not exist.";
    }
} else {
    echo "Error: Missing form data.";
}

$conn->close();
?>
