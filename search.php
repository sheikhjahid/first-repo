<?php
if(isset($_POST["value"]))
{
	$var=$_POST['searchvalue'];
	$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration` WHERE CONCAT(`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username`) LIKE '%".$var."%'";
	$search_result=filtertable($query);
}
else
{
	$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration`";
	$search_result=filtertable($query);
}
function filtertable($query)
{
	$conn=mysqli_connect("localhost","root","office","test");
	$filter_result=mysqli_query($conn,$query);
	return $filter_result;
}
?>
<html>
<title></title>
<head>
 <style>
 	table,tr,th,td:
 	{
 		border: 1px solid black;
 	}
 </style> 
</head>
<body>
	<form action="search.php" method="post">
<input type="text" name="searchvalue" placeholder="write something..">
<input type="button" name="value" value="filter" placeholder="write something..">
<table>
	<tr>
		<th><b>ID</b></th>
		<th><b>FIRSTNAME</b></th>
		<th><b>LASTNAME</b></th>
		<th><b>EMAIL</b></th>
		<th><b>PHONE</b></th>
		<th><b>ADDRESS</b></th>
		<th><b>USERNAME</b></th>
	</tr>
	<tr>
	<?php while($row=mysqli_fetch_array($search_result)):?>
			<tr>
				<td><?php  echo $row["id"];?></td>
				<td><?php echo $row["firstname"];?></td>
				<td><?php echo $row["lastname"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["phone"]; ?></td>
				<td><?php echo $row["address"];?></td>
				<td><?php echo $row["username"];?></td>
				
		</tr>
	<?php endwhile; ?>
</table>
</form>
</body>
</html>