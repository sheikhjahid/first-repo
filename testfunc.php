<?php
  include('dbconfig.php');
  $var=$_GET['id'];
  class sql{
    function sql()
    {

    }

    function admin($var)
    {
        echo $sql=mysql_query("SELECT id,firstname,lastname,email,phone,address,username FROM registration WHERE id="$var" ");
    } 
}
?>