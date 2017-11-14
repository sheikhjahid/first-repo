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
	top: 50%;
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
	<?php

	require_once "functions.php";
	$jw=new Jahid_Works();
	$arr='';
	$id=$_GET['id'];
	if(isset($_GET['id']))
	{
		$arr['id']=$_GET['id'];	
	}
	$fields='firstname,lastname,phone,address,email,username';
	$result_arr=$jw->getSpecificData($arr,$fields);

	?>
	<form action="update_action.php?id=<?php echo $id; ?>" method="post">
	<div class="container">
		<center><label><b><i><u>UPDATE PORTAL</u></i></b></label></center>
	  	<div class="row">
			<div class="col-md-12"> 
				<?php
					foreach($result_arr as $k=>$v)
					{
						foreach($v as $field=>$value)
						{
				?>				
					<div class="col-md-2"><span class="input-group-addon" id="basic-addon1"><?php echo ucwords($field); ?></span></div>
					<div class="col-md-10"><input type="text" class="form-control" placeholder="write something.."  name="<?php echo $field; ?>" aria-describedby="basic-addon1" value="<?php echo $value; ?>"></div>
				<?php		
						}
					}
				?>
			</div>
			<div class="wrapper">
		<input type="submit" value="UPDATE" class="button" name="change"></div>
		</div>
		<nav aria-label="back">
			<ul class="pager">
				<li> <a href="search.php">PREVIOUS </a></li>
			</ul>
		</nav>
		</nav>
	</div>
</form>
</body>
</html>

