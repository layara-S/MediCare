<?php

$con = new mysqli("localhost","root","","pharmacy");

if($con -> connect_error)
{
    die("Connection failed".$con->connect_error);
}

?>