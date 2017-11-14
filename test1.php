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

	require_once "functions.php";
	$jw=new Jahid_Works();
	$arr='';

	if(isset($_GET['id']))
	{
		$arr['id']=$_GET['id'];	
	}
	$fields='id,firstname,lastname,phone,address,email,username';
	$result_arr=$jw->getSpecificData($arr,$fields);

	?>
	<div class="container">
	  	<div class="row">
			<div class="col-md-12"> 
				<?php
					foreach($result_arr as $k=>$v)
					{
						foreach($v as $field=>$value)
						{
				?>				
					<div class="col-md-2"><?php echo ucwords($field); ?></div>
					<div class="col-md-10"><?php echo $value;?></div>
				<?php		
						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>

