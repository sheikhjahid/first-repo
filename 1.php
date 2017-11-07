<?php
$servername="localhost";
$username="root";
$password="office";
$conn= new mysqli($servername,$username,$password);
if($conn->connect_error==TRUE)
{
  echo "CONNECTION WAS NOT MADE".$conn->connect_error;
}
else
{
  echo "CONNECTION WAS MADE";
}
$sql = "CREATE DATABASE jack";
if($conn->query($sql) === TRUE)
{
  echo "DATABASE CREATED SUCCESSFULLY";
}
else
{
  echo "DATABASE NOT CREATED".$conn->error;
}
$conn->close();
?>