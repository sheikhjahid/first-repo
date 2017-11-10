<?php
include('dbconfig.php');
echo  "</br>";
echo "</br>";
    $var=$_GET['id'];

    $query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username`FROM `registration` WHERE id=$var LIMIT 0,1";
    $result=$conn->query($query);
    if(mysqli_num_rows($result)>0)
    {
      $row=mysqli_fetch_array($result);
      print_r($row);
      echo "</br>";
      echo "</br>";
        echo "ID="; echo $row['id'];
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
    
    }
    else
    {
      echo 'no data found';
    }
  ?>



