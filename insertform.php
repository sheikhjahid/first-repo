<?php
include_once ('dbconfig.php');

$fname=$lname=$eml=$phn=$addr=$uname=$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fname=test_input($_POST["firstname"]);
	$lname=test_input($_POST["lastname"]);
	$eml=test_input($_POST["email"]);
	$phn=test_input($_POST["phone"]);
	$addr=test_input($_POST["address"]);
	$uname=test_input($_POST["username"]);
	$pass=test_input($_POST["password"]);
	if (isset($_POST["insert"]))
 {
  echo $sql="INSERT INTO registration(firstname,lastname,email,phone,address,username,password)VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["username"]."','".md5($_POST["password"])."')";
	mysqli_query($conn,$sql);
}
}
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
 
if($result==TRUE)
{
	echo "DATA INSERTED SUCCESSFULLY";
}
else
{
	echo "DATA NOT INSERTED".$conn->error;
}
$conn->Close();
?>