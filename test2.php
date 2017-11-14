<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once "functions.php";
$jw=new Jahid_works();
$arr='';
if(isset($_GET['id']))
{
$arr['id']=$_GET['id'];
}
$fields='id,firstname,lastname,email,phone,address,username';
$update_arr=$jw->getUpdateData($arr,$fields)
?>
<div class="container">
	<center><label><b><i><u>UPDATE PORTAL</u></i></b></label></center>
	<div class="row">
		<div class="col-md-2">
	<?php

	foreach($update_arr as $i=>$j)
	{
		foreach($j=>$fields=$value)
		{
	?>
	<div class="col-md-2"><?php echo ucwords($fields); ?>
		<input type ="text" placeholder="write something" value="<?php echo $value1; ?>">
		<input type="submit"  class ="button" value="UPDATE" name="change">
<?php
}
}
?>
<nav arial-label="back">
	<ul class="pager">
		<li><a href="search.php">PREVIOUS</a></li>
	</ul>
	</nav>
</div>
</body>
</html>