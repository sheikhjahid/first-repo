<?php
require_once 'functions.php';
$arr=array();
$jw=new Jahid_Works();
if(isset($_GET['id']))
{
	$arr['id']=$_GET['id'];
}
// $jw->setDeleteData($arr);
if($jw->setDeleteData($arr)==1)
{
	header("Location:search.php");
}
else
{
	echo "DELETION UNSUCCESSFUL!!";
}
