<!DOCTYPE html>
<html>
<head>
	<title>All Properties</title>
	<link rel="stylesheet" type="text/css" href="all_properties.css">
        

</head>
<body>
	<h2>All Properties</h2>
	<a href="add_property.php" class="btn">Add Property</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Owner Name</th>
				<th>Owner Contact</th>
				<th>Address</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Kind Of Property</th>
				<th>Area</th>
				<th>Total Valuation</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include('config.php');
                                include 'header.php';
				// Fetch properties from database
				$query = "SELECT * FROM properties";
				$result = mysqli_query($conn, $query);

				// Display properties in table
				while($row = mysqli_fetch_assoc($result)){
				   echo "<tr>";
				   echo "<td>".$row['property_id']."</td>";
				   echo "<td>";
                                   if (isset($row['owner_name'])) {
                                        echo $row['owner_name'];
                                        }
                                        echo "</td>";
				   echo "<td>".$row['owner_contact']."</td>";
				   echo "<td>".$row['address']."</td>";
				   echo "<td>".$row['city']."</td>";
				   echo "<td>".$row['zip_code']."</td>";
				   echo "<td>".$row['kind_of_property']."</td>";
				   echo "<td>".$row['area']."</td>";
				   echo "<td>".$row['total_valuation']."</td>";
				   if (isset($row['status'])) {
                                        if($row['status'] == 1){
                                         echo "<td>Active</td>";
                                       } else {
                                         echo "<td>Inactive</td>";
                                         }
                                        } else {
                                          echo "<td></td>";
                                       }

				   echo "<td>";
				   echo "<a href='edit_property.php?id=".$row['property_id']."' class='btn'>Edit</a>";
				   echo "<a href='delete_property.php?id=".$row['property_id']."' class='btn'>Delete</a>";
				   echo "</td>";
				   echo "</tr>";
				}
			?>
		</tbody>
	</table>

</body>
</html>
