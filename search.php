<html>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
 <style>
 	table,tr,th,td:
 	{
 		border: 1 pixel solid black;
 	}
 </style> 
</head>
<body>
	<?php

$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration`";
    $search_result=filtertable($query);

  function filtertable($query)
  {
    $conn=mysqli_connect("localhost","root","office","test");
    $filter_result=mysqli_query($conn,$query);
    return $filter_result;
  }
  
  ?>	
	<form action="search.php" method="post">
<input type="text" name="searchvalue" placeholder="write something..">
<?php
	
	if(isset($_GET['action']) && $_GET['action']=="update")
	{
?>
	<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Welcome to the database</strong> YOU CAN VIEW,CHANGE OR DELETE HERE </div>
<?php
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
			<div class="col-md-1">ADDRESS</div>
			<div class="col-md-1">USERNAME</div>
			<div class="col-md=2"></div>
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
		<div class="col-md-2"><a href="test1.php?id=<?php echo $row["id"]; ?>" name="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
		<a href="update2.php?id=<?php echo $row["id"];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
		<a href="delete_action.php?id=<?php echo $row["id"];?>"><i class="fa fa-trash" aria-hidden="true" name="delete"></i></a>
	</div>
		
		<?php
		}

	?>
	</div>
  <div>
  <nav aria-label="goto">
 <ul class="pager">
 <li><a href="all.php">VIEW RECORDS</a></li>
 </ul>
 </nav>
 </div>   
</div>


</body>
</html>