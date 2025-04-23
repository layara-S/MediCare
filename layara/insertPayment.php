<?php
require 'connection.php';

// Check if all required fields are set
if (isset($_POST["Username"], $_POST["FirstName"], $_POST["LastName"], $_POST["Address"], $_POST["City"], $_POST["Country"], $_POST["Contact"])) {

    $userName = $CON->real_escape_string($_POST["Username"]);
    $firstName = $CON->real_escape_string($_POST["FirstName"]);
    $lastName = $CON->real_escape_string($_POST["LastName"]);
    $address = $CON->real_escape_string($_POST["Address"]);
    $city = $CON->real_escape_string($_POST["City"]);
    $country = $CON->real_escape_string($_POST["Country"]);
    $contact = $CON->real_escape_string($_POST["Contact"]);

    // Prepared statement to insert data safely into database table
    $stmt = $CON->prepare("INSERT INTO payment (Username, FirstName, LastName, Address, City, Country, ContactNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $userName, $firstName, $lastName, $address, $city, $country, $contact);

    // Execute the statement and check for success/failure
    if ($stmt->execute()) {
        echo "<script>alert('Insert Successful'); window.location.href='paymentDisplay.php';</script>";
    } else {
        if ($CON->errno == 1062) {
            echo "<script>alert('Error: Duplicate entry. This username already exists.'); history.go(-1);</script>";
        } else {
            echo "<script>alert('Error: " . $CON->error . "'); history.go(-1);</script>";
        }
    }
    $stmt->close();
} else {
    echo "<script>alert('Error: Required fields are missing.'); history.go(-1);</script>";
}
?>
