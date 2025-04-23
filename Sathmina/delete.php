<?php

require 'config.php';

$prescriptionID = $_POST["prescriptionID"];

$sqldelete= "DELETE FROM prescription WHERE Prescription_ID ='$prescriptionID'";



if ($conn->query($sqldelete) === TRUE) {
    echo "Delete Successful";
} else {
    echo "Error deleting record: " . $conn->error;
};

?>