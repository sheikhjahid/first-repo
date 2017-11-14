<?php

  require_once "functions.php";
  $jw=new Jahid_Works();

  if(isset($_GET['id']))
  {
    $arr['id']=$_GET['id']; 
  }

  unset($_POST['change']);
 
  $jw->setUpdateData($arr,$_POST);
  if($jw-setUpdateData($arr,$_POST)==1)
  {
    header("Location:search.php");
  }
  else
  {
    echo $conn->error();
  }

?>