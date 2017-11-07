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
$sql="INSERT INTO registration(firstname,lastname,email,phone,username,password) VALUES('SHEIKH','JAHID','jahid@gmail.com','9051037828','jack','password')";
if($conn->query($sql)===TRUE)
{
  echo "INSERTION OF DATA SUCESSFULL!!";
}
else
{
  echo "DATA NOT INSERTED!!".$conn->error;
}
$conn->close();
?>