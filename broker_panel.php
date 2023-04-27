
<!DOCTYPE html>
<html>
<head>
	<title>Broker Panel</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		h1 {
			margin: 0;
			font-size: 32px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
			background-color: #fff;
		}
		th, td {
			text-align: left;
			padding: 12px;
		}
		th {
			background-color: #333;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		a {
			color: #333;
			text-decoration: none;
		}
		.add-broker-link {
			display: block;
			margin-bottom: 20px;
			text-align: right;
		}
		.add-broker-link a {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border-radius: 5px;
			text-decoration: none;
			transition: all 0.3s ease;
		}
		.add-broker-link a:hover {
			background-color: #fff;
			color: #333;
			border: 1px solid #333;
		}
	</style>
</head>
<body>
	<header>
		<h1>Broker Panel</h1>
	</header>
	<div class="container">
		<div class="add-broker-link">
			<a href="add_broker.php">Add Broker</a>
		</div>
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
                                   echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
