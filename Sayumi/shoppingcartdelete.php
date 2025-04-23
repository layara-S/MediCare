<?php 

    include "connection.php";

    if(isset($_GET['id']))
    {
        $dID = $_GET['id'];

        $sql = "delete from `cart` where `ID` = $dID";
        $result = mysqli_query($CON, $sql);
        if($result){
            echo "Deleted successfully";
            header("Location:shoppingCart.php");
        }else
        {
            die(mysqli_error($CON));
        }
    }