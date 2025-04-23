<?php 

    include "connection.php";

    $userName = $_GET['userName'];
    $sql = "SELECT * FROM payment WHERE Username = '$userName'";
    $result = mysqli_query($CON, $sql);
    $row = mysqli_fetch_assoc($result);

            $username = $row['Username'];
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $address = $row['Address'];
            $city = $row['City'];
            $country = $row['Country'];
            $contact = $row['ContactNumber'];

    if (isset($_POST['submit'])){
        $firstname1= $_POST['nfirst'];
        $lastname1= $_POST['nlast'];
        $address1= $_POST['naddress'];
        $city1= $_POST['ncity'];
        $country1= $_POST['ncountry'];
        $contact1= $_POST['ncontact'];

        $sql="update payment set 
        Username = '$userName',
        Firstname = '$firstname1',
        Lastname = '$lastname1',
        Address = '$address1',
        City = '$city1', 
        Country = '$country1' ,
        ContactNumber = '$contact1' 
        where Username = '$username'";

        $result = mysqli_query($CON, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:paymentDisplay.php');
    } else {
        echo "ERROR!!";
        //die(mysqli_error($con));
    }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="paymentUpdate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment Details </title>
</head>
<body>
    <h2>Update details </h2>
    <form method="POST" name="myform" target="_blank">
        <label for="first"> First Name:</label><br>
        <input type="text" id="nfirst" name="nfirst" value="<?php echo $firstname; ?>"><br>
        
        <label for="last">Last Name:</label><br>
        <input type="text" id="nlast" name="nlast" value="<?php echo $lastname; ?>"><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="naddress" name="naddress" value="<?php echo $address; ?>"><br>
        
        <label for="city">City:</label><br>
        <input type="text" id="ncity" name="ncity" value="<?php echo $city; ?>"><br><br>

        <label for="country">Country:</label><br>
        <input type="text" id="ncountry" name="ncountry" value="<?php echo $country; ?>"><br><br>

        <label for="contact">Contact Number:</label><br>
        <input type="text" id="ncontact" name="ncontact" value="<?php echo $contact; ?>"><br><br>
        
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>