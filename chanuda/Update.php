<?php
require 'config.php';

$message = ""; // Initialize message variable

// Collect form data
    $Product_ID	 = $_POST['Pid'];
    $Product_Name = $_POST['Pname'];
    $Quantity = $_POST['Pstock'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];

    $Image1 = $_FILES['Pimage1']['name'];
    $product_image_tmp_name1 = $_FILES['Pimage1']['tmp_name'];
    $product_image_folder1 = 'uploaded_img/'.$Image1;

    $Image2 = $_FILES['Pimage2']['name'];
    $product_image_tmp_name2 = $_FILES['Pimage2']['tmp_name'];
    $product_image_folder2 = 'uploaded_img/'.$Image2;

    $Image3 = $_FILES['Pimage3']['name'];
    $product_image_tmp_name3 = $_FILES['Pimage3']['tmp_name'];
    $product_image_folder3 = 'uploaded_img/'.$Image3;

    $Image4 = $_FILES['Pimage4']['name'];
    $product_image_tmp_name4 = $_FILES['Pimage4']['tmp_name'];
    $product_image_folder4 = 'uploaded_img/'.$Image4;
    
    // Insert into database
    $update = "UPDATE product SET Product_Name = '$Product_Name', Quantity = '$Quantity', Price = '$Price', Image1 = '$Image1', Image2 = '$Image2', Image3 = '$Image3', Image4 = '$Image4'
           WHERE Product_ID = '$Product_ID'";
    
    // Execute the query
    $upload = mysqli_query($con, $update);
    
    if($upload){
        move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
        move_uploaded_file($product_image_tmp_name2, $product_image_folder2);
        move_uploaded_file($product_image_tmp_name3, $product_image_folder3);
        move_uploaded_file($product_image_tmp_name4, $product_image_folder4);
        $message = 'Product Updated successfully';
    } else {
        $message = 'Could not update the product';
    }

    echo "<script>alert('$message'); window.location.href = 'input.php';</script>;";

?>

