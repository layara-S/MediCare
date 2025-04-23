
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include ('header.php')?>

<style>
<?php include 'crudcss.css'; ?>
</style>
    <title>Prescription Records</title>
<body>

    <h2>Prescription Records</h2>

<?php

require 'config.php';



$readSQL = "SELECT * FROM prescription" ;

$result= $conn->query($readSQL);

if ($result->num_rows>0){

echo "<table border='1'  >";
echo "<tr>
<th>Prescription ID</th>
<th>Issued Date</th>
<th>Quantity</th>
<th>Medication ID</th>
<th>Customer ID</th>
</tr>";
  

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Prescription_ID"] . "</td>";
        echo "<td>" . $row["Issued_Date"] . "</td>";
        echo "<td>" . $row["Pre_Qty"] . "</td>";
        echo "<td>" . $row["Medication_ID"] . "</td>";
        echo "<td>" . $row["Customer_ID"] . "</td>";
        echo "</tr>";
    }

echo "</table>";
}
else 
{
    echo "No Results";
}


?>
</body>

<br>
<?php include ('footer.php')?>

</html>