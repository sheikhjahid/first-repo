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
$X=$_REQUEST["choice"];
switch($X)
{
	case 1:
			$sql="select * from registration";
			if($conn->query($sql)===TRUE)
			{

			}
}
?>