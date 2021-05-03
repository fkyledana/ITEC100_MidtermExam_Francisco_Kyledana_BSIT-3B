<!DOCTYPE html>
<html>
<head>
	<title>Activity Logs</title>
	<link rel = "stylesheet" href = "ActLogs1.css">
</head>
<body><center>
	<br>
	<h1>AUDIT TRAIL</h1>
	<div class="main">
		
		<table>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Activity</th>
			<th>Date and Time</th>
		</tr>
		<?php  
		$con = mysqli_connect('localhost','root','','users');
		$query = ("SELECT * FROM logs");
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
		?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo $row['activity']; ?></td>
		<td><?php echo $row['time']; ?></td>
		
		</tr>
		<?php
		}
?>
	</table>
	</div>
	 <button type="button" name="logout"><a href = "signin.php">Logout</button>
	</center>
</body>
</html>