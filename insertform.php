<?php
include('dbconfig.php');
?>
<?php
$x1=$_REQUEST["a"];
$x2=$_REQUEST["b"];
$x3=$_REQUEST["c"];
$x4=$_REQUEST["d"];
$x5=$_REQUEST["e"];
$x6=$_REQUEST["f"];
$x7=$_REQUEST["g"];
echo "</br>";
echo "</br>";
echo "FISRTNAME=".$x1;
echo "</br>";
echo "</br>";
echo "LASTNAME=".$x2;
echo "</br>";
echo "</br>";
echo "EMAIL=".$x3;
echo "</br>";
echo "</br>";
echo "PHONE=".$x4;
echo "</br>";
echo "</br>";
echo "ADDRESS=".$x5;
echo "</br>";
echo "</br>";
echo "USERNAME=".$x6;
echo "</br>";
echo "</br>";
echo "PASSWORD=".$x7;
$fname=$lname=$eml=$phn=$addr=$user=$pass="";
if(isset($_POST['txtbutton']))
{
$fname=$_POST["a"];
$lname=$_POST["b"];
$eml=$_POST["c"];
$phn=$_POST["d"];
$addr=$_POST["e"];
$uname=$_POST["f"];
$pass=$_POST["g"];
$sql="insert into registration(firstname,lastname,email,phone,address,username,password) values('$fname','$lname','$eml','$phn','$addr','$uname','$pass')";

if($conn->query($sql)===TRUE)
{
	echo "DATA INSERTED";
}
else
{
	echo "DATA NOT INSERTED";
}
}
?>