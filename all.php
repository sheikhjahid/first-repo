<?php

require_once "functions.php";
$jw=new Jahid_Works();

$where['status']=1;
$select_fields="firstname,lastname,email,phone,address,username";
$limit='0,2';

if(isset($_GET['page']))
{	
	$offset=$_GET['page']*2;
	$per_page=2;
	$limit=$offset.','.$per_page;
}
$resultArr=$jw->getAllData($where,$select_fields,$limit);

$pagination=$jw->getPagination($where,$select_fields);
$pagination=ceil($pagination/2);

$fields=array();
if(count($resultArr)>0)
{
	$fields=array_keys($resultArr[0]);	
}
?>
<html>
<title>Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<head>
</head>
<body>
	<div>
		<center><span class="label-label-default"><b><i><u>REGISTRATION DATABASE</u></i></b></span></center>
	</div>
	<div class="input-group">
      <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search by firstname,email or by phone only..." value="<?php echo $value; ?>">
      </br>
  </br>
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

								<?php 
									$active_class='';
									$prev_pagelink=0;
									$next_pagelink=1;
									if(!isset($_GET['page']))
									{
										$active_class='active';
										
										
										
									}
									else
									{
										$prev_pagelink=($_GET['page']>0?$_GET['page']-1:0);
										$next_pagelink=($_GET['page']<($pagination-1)?$_GET['page']+1:$pagination-1);
									}

								?>
								<nav aria-label="Page navigation">

								  <ul class="pagination" text-indent="vertical" >
								  	<li>
								      <a href="?page=<?php echo $prev_pagelink; ?>" aria-label="Previous">
								        <span aria-hidden="true">PREVIOUS</span>
								      </a>
								    </li>
								   
									<li class="<?php echo $active_class; ?>"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">1</a></li>	    
								    	<?php
								    		$j=2; 
								    		for($i=1;$i<$pagination;$i++,$j++)
								    		{
								    			$active_class='deactive';
								    			if($_GET['page']==$i)
								    			{
								    				$active_class='active';
								    			}
								    	?>	
								    			
								    			<li class="<?php echo $active_class; ?>"><a href="?page=<?php echo $i; ?>" ><?php echo $j; ?></a></li>
								    	<?php		
								    		}
								    	?>
								    		
								        <li><a href="?page=<?php echo $next_pagelink; ?>" aria-label="Next"><span aria-hidden="true">NEXT</span>
				                         </a></li>
				                           
				             		    </nav>

			</div>
			
				
             		     
					
		</div>
	</div>
</body>
</html>
