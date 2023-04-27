<!DOCTYPE html>
<html>
<head>
	<title>Property Panel</title>
	<link rel="stylesheet" type="text/css" href="property_panel.css">
</head>
<body>
	<h2 class="page-title">Property Panel</h2>
	<form method="POST" action="add_property.php">
		<label>Property Owner Name:</label>
		<input type="text" name="property_owner_name" required>

		<label>Owner Name Contact:</label>
		<input type="text" name="owner_contact" required>

		<label>Address:</label>
		<input type="text" name="address" required>

		<label>City:</label>
		<input type="text" name="city" required>

		<label>Zip Code:</label>
		<input type="text" name="zip_code" required>

		<label>Kind Of Property:</label>
		<select name="kind_of_property" required>
			<option value="">-- Select --</option>
			<option value="Apartment">Apartment</option>
			<option value="House">House</option>
			<option value="Commercial">Commercial</option>
			<option value="Land">Land</option>
		</select>

		<label>Area:</label>
		<input type="text" name="area" required>

		<label>Total Valuation:</label>
		<input type="text" name="total_valuation" required>

		<label>Property Status:</label>
		<select name="property_status" required>
			<option value="">-- Select --</option>
			<option value="1">Active</option>
			<option value="0">Inactive</option>
		</select>

		<input type="submit" value="Add Property">
	</form>
</body>
</html>
