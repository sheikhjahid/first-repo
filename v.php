<html>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
  
</head>
<body>
<?php

    $var=$_GET['id'];
    $query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username`FROM `registration` WHERE id=$var LIMIT 0,1";
    $search_result=filtertable($query);

  function filtertable($query)
  {
    $conn=mysqli_connect("localhost","root","office","test");
    $filter_result=mysqli_query($conn,$query);
    return $filter_result;
  }
  ?>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-1">ID</div>
      <div class="col-md-2">FIRSTNAME</div>
      <div class="col-md-2">LASTNAME</div>
      <div class="col-md-2">EMAIL</div>
      <div class="col-md-1">PHONE</div>
      <div class="col-md-1">ADDR</div>
      <div class="col-md-1">USERNAME</div>
      <div class="col-md-2">&nbsp;</div>
    </div>
  </div>
  <div class="col-md-12"> 
  <?php 
    mysqli_data_seek($search_result,0);
    while($row=mysqli_fetch_array($search_result))
    {
  ?>
    <div class="col-md-1"><?php echo $row["id"]; ?></div>
    <div class="col-md-2"><?php echo $row["firstname"];?></div>
    <div class="col-md-2"><?php echo $row["lastname"];?></div>
    <div class="col-md-2"><?php echo $row["email"];?></div>
    <div class="col-md-1"><?php echo $row["phone"]; ?></div>
    <div class="col-md-1"><?php echo $row["address"];?></div>
    <div class="col-md-1"><?php echo $row["username"];?></div>
    
    </div>
  <?php
    }

  ?>
  </div>


  <?php
//include('dbconfig.php');
//echo  "</br>";
//echo "</br>";
    //$var=$_GET['id'];

    //$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username`FROM `registration` WHERE id=$var LIMIT 0,1";
    //$result=$conn->query($query);
    //if(mysqli_num_rows($result)>0)
    //{
      //$row=mysqli_fetch_array($result);
      //print_r($row);
      //echo "</br>";
      //echo "</br>";
        //echo "ID="; echo $row['id'];
      //echo "</br>";
      //echo "</br>";
      //echo "FIRSTNAME="; echo $row['firstname'];
      //echo "</br>";
      //echo "</br>";
      //echo "LASTNAME="; echo $row['lastname'];
      //echo "</br>";
      //echo "</br>";
      //echo "EMAIL="; echo $row['email'];
      //echo "</br>";
      //echo "</br>";
      //echo "PHONE="; echo $row['phone'];
      //echo "</br>";
      //echo "</br>";
      //echo "ADDRESS="; echo $row['address'];
      //echo "</br>";
      //echo "</br>";
      //echo "USERNAME="; echo $row['username'];
      //echo "</br>";
      //echo "</br>";
    
    //}
    //else
    //{
      //echo 'no data found';
    //}
  ?>
</body>
</html>


