<?php

require_once "functions.php";
$jw=new Jahid_Works();

$search_string=$_POST['s'];
$where=" firstname like '%".$search_string."%' OR email like '%".$search_string."%' OR phone like '%".$search_string."%'";
$select_fields="firstname,lastname,email,phone,address,username";

$resultArr=$jw->getAjaxSearch($where,$select_fields);
$fields=array();
if(count($resultArr)>0)
{
	$fields=array_keys($resultArr[0]);	
}
else
{
	echo '<h1> No Data Found';
	die();
}
?>

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
