<html>
<head>
<style>
	tr,td
	{
	padding:1em; 
	}
</style>
</head>
</html>

<?php
$con = Mysqli_Connect("localhost","root","","swetha");
if(!$con)
	{
	echo "Connection error !";
	}
else
	{
	$query = "select * from reg";
	$values = mysqli_query($con,$query);
	echo '<table border="1"style="margin-left:auto;margin-right:auto;margin-top:3em;border-collapse:collapse;">
	<th>Name</th><th>Phone No</th><th>Email</th><th>Address</th>';
if(mysqli_num_rows($values))
	{
	while($row=mysqli_fetch_assoc($values))
		{
		echo '<tr>';
		echo '<td>';
		echo $row["Name"];
		echo '</td>';
		echo '<td>';
		echo $row["Phone"];
		echo '</td>';
		echo '<td>';
		echo $row["Email"];
		echo '</td>';
		echo '<td>';
		echo $row["Address"];
		echo '</td>';
		echo '</tr>';
		}
	}
else
	{
	echo "error".$query.mysqli_error($con);
	}
}
?>
	