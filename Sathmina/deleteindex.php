<html>
<head>
    <meta charset="UTF-8">
    <title>Delete</title>

    <?php include ('header.php')?>
    <?php include ('view.php')?>

<style>
<?php include 'crudcss.css'; ?>
</style>


</head>
<div class="bodymargin">

<body>
    
<form method="POST" action="delete.php">
    <br>
 Insert ID To Delete: <input type="text" name="prescriptionID">  <br>
 <input type = "submit" value = "Delete">
</form>



</body>
</div>


<br>
<?php include ('footer.php')?>


</html>