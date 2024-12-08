<!-- <?php
// Include the database connection
include 'db.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the required data is set
if (isset($_POST['payment_id'], $_POST['total_amount'], $_POST['date'])) {
    // Retrieve and sanitize input data
    $payment_id = mysqli_real_escape_string($conn, $_POST['payment_id']);
    $total_amount = mysqli_real_escape_string($conn, $_POST['total_amount']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Check if PaymentID exists in the Payment table
    $check_payment = "SELECT * FROM Payment WHERE PaymentID = '$payment_id'";
    $result = $conn->query($check_payment);

    if ($result && $result->num_rows > 0) {
        // Insert data into the Invoice table
        $sql = "INSERT INTO Invoice (PaymentID, TotalAmount, Date) 
                VALUES ('$payment_id', '$total_amount', '$date')";

        if ($conn->query($sql) === TRUE) {
            echo "Invoice generated successfully.";
        } else {
            // Display MySQL error if the query fails
            echo "Error: " . $conn->error;
        }
    } else {
        // If PaymentID does not exist, show an error
        echo "Error: Payment ID does not exist.";
    }
} else {
    // If form data is missing, show an error
    echo "Error: Missing form data. Please fill out all fields.";
}

// Close the database connection
$conn->close();
?> -->
