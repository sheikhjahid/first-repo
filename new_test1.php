<?php
include_once('dbconfig.php');// contains the database function
//$var=$_POST["id"]; // getting the url-id
session_checker();

db();
$id = $_SESSION['id'];
$select =  "SELECT * FROM registration WHERE id ='$id' LIMIT 1";
$row1 = dbprocess ($select);
$rows = mysqli_fetch_assoc($row1);
if(isset())
$fname= $_rows['firstname'];
$lname = $_rows['lastname'];
$eml = $_rows['email'];
$phn = $_rows['phone'];
$addr = $_rows['address'];
$uname = $_rows['username'];
//$salt1 = $rows['salt'];
//$phone1 = $rows['phone'];
//$accesslevel = $rows['accesslevel'];
//$position = $rows['position'];

function update(){
   db(); // database function
   if(isset($_POST["change"]))
   {
    $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $email = $_POST['eml'];
   $phone = $_POST['phn'];
   $address = $_POST['addr'];
   $username= $_POST['uname'];
   $id1= $_POST['id'];
   echo  $sql = "UPDATE registration SET firstname=?,lastname=?,email=?,phone=?,address=?,username=? WHERE id=?";
   $q = $conn->prepare($sql);
   $q->execute(array($firstname,$lastname,$email,$phone,$address,$username,$id)); 
    
      header("Location:search.php?update_action=$id");
    }
    //}
    //$result=mysqli_query($conn,$query);
    //if(mysqli_affected_rows($result))
    //{
    
   //$firstname = $_POST['fname'];
   //$lastname = $_POST['lname'];
   //$email = $_POST['eml'];
   //$phone = $_POST['phn'];
   //$address = $_POST['addr'];
   //$username= $_POST['uname'];
   //$id1= $_POST['id'];
   //function createSalt(){
     //$string = md5(uniqid(rand(), true));
     //return substr($string, 0, 3);
   //};

 //$salt = createSalt();
   //$hash = hash('sha256',$salt1.$pass);

    //echo  $sql = "UPDATE registration SET firstname=?,lastname=?,email=?,phone=?,address=?,username=? WHERE id=?";
   //$q = $conn->prepare($sql);
   //$q->execute(array($firstname,$lastname,$email,$phone,$address,$username,$id));

?>