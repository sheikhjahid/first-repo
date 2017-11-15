<html>
<title></title>
<head></head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<?php 
include("dbconfig.php"); 
/*$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = "office";  
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname = 'test';  
$connection = mysql_select_db($dbname);*/  
  
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM registration ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>FIRSTNAME</th>  
<th>LASTNAME</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>ADDRESS</th>
<th>USERNAME</th>
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["firstname"]; ?></td>  
            <td><? echo $row["lastname"]; ?></td>
            <td><? echo $row["email"]; ?></td>
            <td><? echo $row["phone"]; ?></td>
            <td><? echo $row["address"]; ?></td>
            <td><? echo $row["username"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>
</thead>  
</table>  
<?php  
$sql = "SELECT COUNT(id) FROM registration";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='pager.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>
</body>
</html>