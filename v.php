<html>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
  
</head>
<body>
  <form action="search.php" method="post">
<?php
$var=$_GET['id'];
$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration` WHERE `id`=$var";
    $sql=filtertable($query);

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
  <?php
  $get_result=getView($var,'registration'); 
    mysqli_data_seek($search_result,0);
    while($row=mysqli_fetch_array($search_result))
    {
  ?>
  <div class="col-md-2">ID</div>
    <div class="col-md-10"><?php echo $row["id"]; ?></div>
  </div>
</div>
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-2">FIRSTNAME</div>
    <div class="col-md-10"><?php echo $row["firstname"];?></div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-2">LASTNAME</div>
    <div class="col-md-10"><?php echo $row["lastname"];?></div>
  </div>
</div>
    <div class="row">
  <div class="col-md-12">
    <div class="col-md-2">EMAIL</div>
    <div class="col-md-10"><?php echo $row["email"];?></div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-2">PHONE</div>
    <div class="col-md-10"><?php echo $row["phone"];?></div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-2">ADDRESS</div>
    <div class="col-md-10"><?php echo $row["address"];?></div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-2">USERNAME</div>
    <div class="col-md-10"><?php echo $row["username"];?></div>
  </div>
</div>
</br>
</br>
<nav aria-label="back">
 <ul class="pager">
 <li><a href="search.php">PREVIOUS</a></li>
 </ul>
 </nav>   
    <?php
    }

  ?>
  </div>

  
</body>
</html>


