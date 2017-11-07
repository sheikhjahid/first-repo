
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
	echo "CONNECTION WAS  MADE";
}
?>