<?php
require "connection.php";
$did = $_REQUEST["id"];


$row = getCurd($did);

@unlink('image/'.$row['image']);

$table = "DELETE FROM crud WHERE id = '$did'";
if(mysqli_query($conn,$table)) {
 
    header("location: dashboard.php");
}