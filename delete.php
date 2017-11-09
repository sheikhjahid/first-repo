<?php
include("dbconfig.php");

$var=$_GET['id'];
echo $query="DELETE FROM `registration` WHERE `registration`.`id`=$var";
mysqli_query($conn,$query);
header("Location: search.php");
?>