<?php
$X=$_REQUEST['$row["id"]'];
$query="SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `address`, `username` FROM `registration` WHERE id='".$X."'";
$search_result= filter_table($query);
function filter_table($query)
{
	$conn=mysqli_connect("localhost","root","office","test");
	$filter_result=mysqli_query($conn,$query);
	return $filter_result;
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>ADDRESS</th>
			<th>USERNAME</th>
		</tr>
		<?php while($row1=mysqli_fetch_array($search_result)): ?>
		<tr>
			<td><?php echo "$row1["id"]"; ?></td>
			<td><?php echo "$row1["firstname"]"; ?></td>
			<td><?php echo "$row1["lastname"]"; ?></td>
			<td><?php echo "$row1["email"]"; ?></td>
			<td><?php echo "$row1["phone"]"; ?></td>
			<td><?php echo "$row1["address"]"; ?></td>
			<td><?php echo "$row1["username"]"; ?></td>
		</tr>
	</table>
</body>
</html>