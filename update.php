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
<body bgcolor="orange">
	<div class="container" style="background-color:orange;">
<form action="update_action.php?id=<?php echo $var; ?>" method="post">
</br>
</br>
<label><b><marquee>UPDATE PORTAL</marquee></b></label>
</br>
</br>
<?php while($row=mysqli_fetch_array($search)) :?>

<label><b>CHANGE FIRSTNAME</b></label>
<input type="text" placeholder="CHANGE FIRSTNAME HERE" name="change_firstname" value="<?php echo $row['firstname'] ?>">
</br>
</br>

<label><b>CHANGE LASTNAME</b></label>
<input type="text" placeholder="CHANGE LASTNAME HERE" name="change_lastname"  value="<?php echo $row['lastname'] ?>">
</br>
</br>

<label><b>EMAIL</b></label>
<input type="text" placeholder="CHANGE EMAIL HERE" name="change_email" value="<?php echo $row['email'] ?>">
</br>
</br>

<label><b>PHONE</b></label>
<input type="text" placeholder="CHANGE PHONE HERE" name="change_phone" value="<?php echo $row['phone'] ?>">
</br>
</br>

<label><b>ADDRESS</b></label>
<input type="text" placeholder="CHANGE ADDRESS HERE" name="change_address" value="<?php echo $row['address'] ?>">
</br>
</br>
<label><b>USERNAME</b></label>
<input type="text" placeholder="CHANGE ID USERNAME" name="change_username" value="<?php echo $row['username'] ?>">
</br>
</br>
<input type="submit" value="UPDATE" name="change">
<?php endwhile;?>
</form>
</div>
</body>
</html>