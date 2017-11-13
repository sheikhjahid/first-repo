<?php
$var=$_GET['id'];
$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration` WHERE id=$var LIMIT 0,1";
	$search=filtertable($query);

function filtertable($query)
{
	$conn=mysqli_connect("localhost","root","office","test");
	$filter=mysqli_query($conn,$query);
	return $filter;
}
?>
<!DOCTYPE html>
<html>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
	
		<style>
			input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.wrapper{
	text-align: left;
}
.button
{
	top: 74%;
  left:80%;
	position:absolute;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/
@media (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>
<body>
	
	<div class="container">
		<center><label><b><u>UPDATE PORTAL</u></b></label></center>
<form action="update_action.php?id=<?php echo $var; ?>" method="post">


<?php while($row=mysqli_fetch_array($search)) :?>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>FIRSTNAME</i></span>
  <input type="text" class="form-control" placeholder="change_firstname"  name= "change_firstname" aria-describedby="basic-addon1" value="<?php echo $row['firstname'] ?>">
</div>
</br>
</br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>LASTNAME</i></span>
  <input type="text" class="form-control" placeholder="change your firstname"  name= "change_lastname" aria-describedby="basic-addon1" value="<?php echo $row['lastname'] ?>">
</div>
</br>
</br>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>EMAIL</i></span>
  <input type="text" class="form-control" placeholder="change your lastname"  name= "change_email" aria-describedby="basic-addon1" value="<?php echo $row['email'] ?>"><span class="input-group-addon" id="basic-addon1"><i>@example.com</i></span>
</div>

</br>
</br>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>PHONE</i></span>
  <input type="text" class="form-control" placeholder="change your email"  name= "change_phone" aria-describedby="basic-addon1" value="<?php echo $row['phone'] ?>">
</div>

</br>
</br>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>ADDRESS</i></span>
  <input type="text" class="form-control" placeholder="change your address"  name= "change_address" aria-describedby="basic-addon1" value="<?php echo $row['address'] ?>">
</div>

</br>
</br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i>USERNAME</i></span>
  <input type="text" class="form-control"  placeholder="change your username"  name= "change_username" aria-describedby="basic-addon1" value="<?php echo $row['username'] ?>"></center>
</div>
</br>
</br>
<div class="wrapper">
<input type="submit"  class ="button" value="UPDATE" name="change">	
</div>


<?php endwhile;?>
<nav aria-label="back">
  <ul class="pager">
    <li><a href="search.php">PREVIOUS</a></li>
  </ul>
  </nav>
</form>
</div>
</body>
</html>