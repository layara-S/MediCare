<?php
require "config.php";

$sql = "DELETE FROM product WHERE Product_ID ='{$_GET["Product_ID"]}'";

if ($con->query($sql)) {
    // Redirect to product page
    header("Location: product_edit.php");
    exit();
} else {
    echo "Not successful";
}
?>
