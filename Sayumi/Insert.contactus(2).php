<?php
  
    require 'connection.php';
    
        $userName = $_POST["UserName"];
        $firstName = $_POST["FirstName"];
        $lastName = $_POST["LastName"];
        $email = $_POST["Email"];
        $contact = $_POST["Contact"];
        $subject = $_POST["Subject"];
        $message = $_POST["Message"];
    
        // Insert data into database table

        $insertSQL = "INSERT INTO contactus (UserName, FirstName, LastName, Email, Contact, Subject, Message)
                VALUES ('$userName', '$firstName', '$lastName', '$email', '$contact', '$subject', '$message')";

                
    if ($CON->query($insertSQL) === TRUE) {
        echo "Insert Successful";
    } else {
        echo "Error: " . $CON->error;
    }  

    
?>
