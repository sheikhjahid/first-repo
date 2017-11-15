<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<?php
include("dbconfig.php");
include("page.class.php");

/*$dbhost="localhost";
$dbname="test";
$dbpass="office";
$dbuser="root";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("Error connecting to mysql");
if(mysqli_connect_error())
{
	echo mysqli_connect_error();
	exit();
} */
$limit=2;
if(isset($_GET["page"])){ $page= $_GET["page"];} else { $page=1; }
$start_from=($page-1) * $limit;
$sql = "SELECT * FROM registration LIMIT $start_from, $limit";
$rs_result=mysqli_query($conn,$sql);
?>
<table class= "table table-bordered table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>ADDRESS</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
		</tr>
	</thead>
<tbody>
	<?php $row=mysqli_fetch_assoc($rs_result) { ?>
	<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["firstname"];?></td>
		<td><?php echo $row["lastname"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["phone"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["username"];?></td>
		<td><?php echo $row["password"];?></td>
	</tr>
<?php
};
?>
</tbody>
</table>
<?php
$sql="SELECT COUNT(id) from registration";
$rs_result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs_result);
$total_records=$row[0];
$total_pages=ceil($total_records/$limit);
$paglink="<ul class='pagination'>";
for($i=1;$i<=$total_pages;$i++)
{
	$paglink.="<li><a href='page.class.php>?page=".$i."'>".$i."</a></li>";
};
echo $paglink."</ul>";
?>
</body>
<script>
	jQuery(document).(readyfunction(){});
</script>
</html>