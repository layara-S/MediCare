<?php 

    include "connection.php";

    if(isset($_GET['userName']))
    {
        $duser = $_GET['userName'];

        $sql = "delete from `payment` where `Username` = '$duser'";
        $result = mysqli_query($CON, $sql);
        if($result){
            echo "Deleted successfully";
            header("Location:paymentDisplay.php");
        }else
        {
            die(mysqli_error($CON));
        }
    }
