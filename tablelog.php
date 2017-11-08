
<?php
$servername="localhost";
$username="root";
$password="office";
$dbname="test";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error==TRUE)
{
	echo "CONNECTION WAS NOT MADE";
}
else
{
	echo "CONNECTION WAS MADE";
}
$sql="CREATE TABLE login(
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(50),
      password VARCHAR(50),
      reg_date TIMESTAMP)
      ";
 if($conn->query($sql)==TRUE)
 {
 	echo "NEW TABLE CREATED";
 }
 else
 {
 	echo "no TABLE CREATED";
 }
 $conn->close();
 ?>