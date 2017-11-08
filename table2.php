<?php
$servername="localhost";
$username="root";
$password="office";
$dbname="test";
$conn=  new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error==TRUE);
{
	echo "CONNECTION WAS NOT MADE".$conn->connect_error;
}
else
{
	echo "CONNECTION WAS MADE";
}
echo"</br>";
echo"</br>";
$sql="CREATE TABLE registration(
	  id INT(6) AUTO_INCREMENT PRIMARY KEY,
	  firstname VARCHAR(50),
	  lastname VARCHAR(50),
	  email VARCHAR(20),
	  address VARCHAR(50),
	  phone  VARCHAR(10),
	  username VARCHAR(20),
	  password VARCHAR(10)";
if($conn->query($sql)===TRUE)
{
	echo "TABLE WAS CREATED";
}
else
{
	echo "TABLE WAS NOT CREATED";
}
$conn->close();
?>