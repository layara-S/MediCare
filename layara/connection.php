<?php
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD= "";
$DATABASENAME= "pharmacy";

$CON=mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASENAME);

if(!$CON)
 {
     die("Connection Failed:" . mysqli_connect_error());
 }else
 {
    
 }