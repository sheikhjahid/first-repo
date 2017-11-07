<?php
$servername="localhost";
$username="root";
$password="office";
$dbname="test";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error==TRUE)
{
	echo "CONNECTION WAS NOT MADE".$conn->connect_error;
}
else
{
	echo "CONNECTION WAS MADE";
}
echo"</br>";
echo"</br>";
$sql="INSERT INTO registration(firstname,lastname,email,phone,address,username,password) VALUES('DAVID','SMITH','david@gmail.com','9838712822','KOLKATA','david','007')";
if($conn->query($sql)===TRUE)
{
	echo "INSERTION OF DATA WAS SUCCESSFUL!!"
}
else
{
	echo "INSERTION WAS UNSUCCESSFUL!!";
}
$conn->close();
?>