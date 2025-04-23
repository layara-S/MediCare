<?php

require 'config.php';


$prescriptionID = $_POST ['prescriptionID'];
$preQty = $_POST ['preQty'];
$issuedDate = $_POST['issuedDate'];
$medicationID = $_POST['medicationID']; 
$customerID = $_POST['customerID'];

$insertSQL= "INSERT INTO prescription (Prescription_ID, Pre_Qty, Issued_Date, Medication_ID , Customer_ID )
VALUES ('$prescriptionID', '$preQty','$issuedDate', '$medicationID', '$customerID ')";

	


if ($conn->query($insertSQL) === TRUE) {
    echo "<script>alert('Insert Successfull');</script>";

} else {
    echo "<script>alert('Error');</script>";
}

?>

