<?php
include 'dbconfig.php';
?>
<?php
$x1=$x2="";
if(isset($_POST['txtbutton']))
{
$x1=$_POST["name"];
$x2=$_POST["pass"];
$sql="insert into login(username,password) values('$x1','$x2')";
if($conn->query($sql)===TRUE)
{
	echo "INSERTED DATA";
}
else
{
	echo "NOT INSERTED DATA";
}
}
?>