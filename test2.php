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
$jw2=new Jahid_works();
$arr='';
if(isset($_GET['id']))
{
$arr['id']=$_GET['id'];
}
$fields1='id,firstname,lastname,email,phone,address,username';
$update_arr=$jw2->getUpdateData($arr,$fields1)
?>
<div class="container">
	<center><label><b><i><u>UPDATE PORTAL</u></i></b></label></center>
	<?php
	
	foreach($update_arr as $i=>$j)
	{
		foreach($j=>$field1=$value)
		{
	?>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i><?php echo ucwords($field1); ?></i></span>
  <input type="text" class="form-control" placeholder="write something.."  name= "write something.." aria-describedby="basic-addon1" value="<?php echo $value; ?>">
</div>
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