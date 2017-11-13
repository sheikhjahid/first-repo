<?php
include('dbconfig.php');

    $var=$_GET['id'];
    $X1=$X2=$X3=$X4=$X5=$X6="";

    if(isset($_POST["change"]))
    {
      $X1=$_POST['change_firstname'];
      $X2=$_POST['change_lastname'];
      $X3=$_POST['change_email'];
      $X4=$_POST['change_phone'];
      $X5=$_POST['change_address'];
      $X6=$_POST['change_username'];
      $query="UPDATE `registration` SET `firstname`='".$X1."',`lastname`='".$X2."',`email`='".$X3."',`phone`='".$X4."',`address`='".$X5."',`username`='".$X6."' WHERE `registration`.`id`='".$var."'";
       
      $result=mysqli_query($conn,$query);
      
       if(mysqli_affected_rows($conn))
       {
        header("Location: search.php?action=update");
         $row=mysqli_fetch_array($result);
         
         print_r($row);
         
         echo "</br>";
         echo "</br>";
         echo "FIRSTNAME="; echo $row['firstname'];
         echo "</br>";
         echo "</br>";
         echo "LASTNAME="; echo $row['lastname'];
         echo "</br>";
         echo "</br>";
         echo "EMAIL="; echo $row['email'];
         echo "</br>";
         echo "</br>";
         echo "PHONE="; echo $row['phone'];
         echo "</br>";
         echo "</br>";
         echo "ADDRESS="; echo $row['address'];
         echo "</br>";
         echo "</br>";
         echo "USERNAME="; echo $row['username'];
         echo "</br>";
         echo "</br>";
      
       }else
       {

      
         echo 'no data found';
         
      
       }
        
  }
 
      
  ?>