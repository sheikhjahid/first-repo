<?php

require_once "functions.php";
$jw=new Jahid_Works();

$where['status']=1;
$fields="firstname,lastname,email,phone,address,username";
$limit='0,2';

if(isset($_GET['page']))
{	
	$offset=$_GET['page']*2;
	$per_page=2;
	$limit=$offset.','.$per_page;
}
$resultArr=$jw->getAllData($where,$fields,$limit);
$pagination=$jw->getPagination($where,$fields);
$pagination=ceil($pagination/2);

$fields=array();
if(count($resultArr)>0)
{
	$fields=array_keys($resultArr[0]);	
}
?>
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
 	.pager
 	{
 		text-indent: vertical;
 		text-align: center;
 		top:50%;
 	}
 	.data-cont
 	{
 		margin-top: 10px;
 	}
 	.table-header .table-cell
 	{
 		font-weight: bold;
 	}
 	.table-row-data:last-child .table-cell
 	{
 		border-bottom:1px solid #ccc;
 	}
 	.table-header .table-cell:last-child, .table-row-data .table-cell:last-child
 	{
 		
 		border-right:1px solid #ccc;
 	}
 	.table-cell
 	{
 		border-top:1px solid #ccc;
 		border-left:1px solid #ccc;
 		padding: 10px;
 	}
 </style> 
</head>
<body>
	<div class="container">
	  	<div class="row">
	  		<div class="data-cont">
				<div class="col-md-12 table-header"> 
					<?php
						foreach($fields as $k=>$f)
						{
					?>
						<div class="col-md-2 table-cell"><?php echo ucwords($f); ?></div>
					<?php

						}
					?>
				</div>
				<div class="col-md-12 table-cont"> 
					<?php
						foreach($resultArr as $x=>$v)
						{
					?>
							<div class="table-row-data">
							<?php
									foreach($v as $field=>$value)
									{
							?>				
								<div class="col-md-2 table-cell"><?php echo $value; ?></div>
							<?php		
									}
							?>
							</div>
					<?php
						}
					?>
				</div>
			</div>
			
				
				<nav aria-label="Page navigation">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <?php 
				    	$active_class='active';
				    	if(isset($_GET['page']))
				    	{
				    		$active_class='';
				    	}

				    ?>
				    <li class="<?php echo $active_class; ?>"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">1</a></li>
				    	<?php
				    		$j=2; 
				    		for($i=1;$i<$pagination;$i++,$j++)
				    		{
				    			$active_class='';
				    			if($_GET['page']==$i)
				    			{
				    				$active_class='active';
				    			}
				    	?>	
				    			<li class="<?php echo $active_class; ?>"><a href="?page=<?php echo $i; ?>" ><?php echo $j; ?></a></li>
				    	<?php		
				    		}
				    	?>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>

			
			<div>
				<center><nav aria-label="back"></center>
					<ul class="pagination pull-center">
						<li><a href="search.php">BACK TO DATABASE</a></li>
					</ul></nav>
			</div>
		</div>
	</div>
</body>
</html>
