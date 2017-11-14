<?php

require_once "functions.php";
$jw=new Jahid_Works();

$where['status']=1;
$fields="*";
$limit='0,2';

if(isset($_GET['page']))
{
	$page=$_GET['page']+1;
	$limit=$page.','.($page*2);
}
$resultArr=$jw->getAllData($where,$fields,$limit);

echo '<pre>';
	print_r($resultArr);
echo '</pre>';

