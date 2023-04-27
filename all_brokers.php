<!DOCTYPE html>
<html>
<head>
	<title>All Brokers</title>
	<link rel="stylesheet" type="text/css" href="all_brokers.css">
</head>
<body>
	<h2>All Brokers</h2>

	<a href="add_broker.php" class="add-btn">Add Broker</a>
s
	<table>
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Experience</th>
				<th>Property</th>
				<th>Commission</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include('config.php');
                                include 'header.php';
				// Fetch brokers from database
				$query = "SELECT brokers.*, properties.property_name FROM brokers JOIN properties ON brokers.property_id = properties.property_id";
				$result = mysqli_query($conn, $query);

				// Display brokers in table
				while($row = mysqli_fetch_assoc($result)){
				   echo "<tr>";
				   
				   echo "<td>".$row['broker_name']."</td>";
				   echo "<td>".$row['broker_contact']."</td>";
				   echo "<td>".$row['broker_email']."</td>";
				   echo "<td>".$row['broker_experience']." yrs</td>";
				   echo "<td>".$row['property_name']."</td>";
				   echo "<td>".$row['broker_commission']."%</td>";
				   if($row['broker_status'] == 1){
				      echo "<td>Active</td>";
				   } else {
				      echo "<td>Inactive</td>";
				   }
				   echo "<td><a href='edit_broker.php?id=".$row['broker_name']."'>Edit</a></td>";
				   echo "<td><a href='delete_broker.php?id=".$row['broker_name']."' onClick=\"return confirm('Are you sure you want to delete this broker?')\">Delete</a></td>";
				   echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
