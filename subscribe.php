<?php
require_once "db_conn.php";

// Retrieve the submitted email from the form
$email = $_POST['email'];

// Insert the email into the subscribers table
$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Thank you for subscribing to our newsletter!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>