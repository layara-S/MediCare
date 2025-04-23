<?php
require 'config.php';

$message = ""; // Initialize message variable

if(isset($_POST['add_product'])){
    // Collect form data
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
    $insert = "INSERT INTO product (Product_ID, Product_Name, Description, Quantity, Price, Image1, Image2, Image3, Image4) 
               VALUES('$Product_ID', '$Product_Name','$Description', '$Quantity', '$Price', '$Image1', '$Image2', '$Image3', '$Image4')";
    
    // Execute the query
    $upload = mysqli_query($con, $insert);
    
    // Check if the query was successful
    if($upload){
        move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
        move_uploaded_file($product_image_tmp_name2, $product_image_folder2);
        move_uploaded_file($product_image_tmp_name3, $product_image_folder3);
        move_uploaded_file($product_image_tmp_name4, $product_image_folder4);
        $message = 'New product added successfully';
    } else {
        $message = 'Could not add the product';
    }

    echo "<script>alert('$message'); window.location.href = 'input.php';</script>";
}

?>

