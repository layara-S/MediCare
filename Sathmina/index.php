<html>
<head>
    <meta charset="UTF-8">
    <?php include ('header.php')?>
    <?php include ('view.php')?>

<style>
<?php include 'crudcss.css'; ?>
</style>
 
<div class="bodymargin">
    <title>Prescription Input Form</title>
</head>
<body>
    <div class=prescription-input-section">
    <h2>Prescription Input Form</h2>

    <form action="insert.php" method="post">
        <label for="prescriptionID">Prescription ID:</label>
        <input type="text" id="prescriptionID" name="prescriptionID" required><br><br>
        <label for="preQty">Quantity:</label>
        <input type="number" id="preQty" name="preQty" required><br><br>
        <label for="issuedDate">Issued Date:</label>
        <input type="date" id="issuedDate" name="issuedDate" required><br><br>
        <label for="medicationID">Medication ID:</label>
        <input type="text" id="medicationID" name="medicationID" required><br><br> 
        <label for="customerID">Customer ID:</label>
        <input type="text" id="customerID" name="customerID" required><br><br>
        <button type="submit">Submit</button>
		<button type="reset"> Reset</button>
    </form></div>
</body>


</div>
<br>
<?php include ('footer.php')?>

</html>
