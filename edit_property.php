<!DOCTYPE html>
<html>
<head>
	<title>Edit Property</title>
        <style>
            body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn:hover {
  background-color: #45a049;
}

.error-message {
  color: red;
  margin-top: 5px;
}

.success-message {
  color: green;
  margin-top: 5px;
}

        </style>
</head>
<body>
	<div class="container">
		<h2>Edit Property</h2>
		<form method="post" action="">
			<?php if(isset($msg)) { ?>
				<p class="msg"><?php echo $msg; ?></p>
			<?php } ?>
			<div class="form-group">
				<label>Property Name:</label>
				<input type="text" name="property_name" value="<?php echo $property['property_name']; ?>">
			</div>
			<div class="form-group">
				<label>Owner Name:</label>
				<input type="text" name="owner_name" value="<?php echo $property['owner_name']; ?>">
			</div>
			<div class="form-group">
				<label>Owner Contact:</label>
				<input type="text" name="owner_contact" value="<?php echo $property['owner_contact']; ?>">
			</div>
			<div class="form-group">
				<label>Address:</label>
				<textarea name="address"><?php echo $property['address']; ?></textarea>
			</div>
			<div class="form-group">
				<label>City:</label>
				<input type="text" name="city" value="<?php echo $property['city']; ?>">
			</div>
			<div class="form-group">
				<label>Zip Code:</label>
				<input type="text" name="zip_code" value="<?php echo $property['zip_code']; ?>">
			</div>
			<div class="form-group">
				<label>Kind of Property:</label>
				<select name="kind_of_property">
					<option value="">Select</option>
					<option value="House" <?php if($property['kind_of_property'] == "House") { echo "selected"; } ?>>House</option>
					<option value="Apartment" <?php if($property['kind_of_property'] == "Apartment") { echo "selected"; } ?>>Apartment</option>
					<option value="Commercial" <?php if($property['kind_of_property'] == "Commercial") { echo "selected"; } ?>>Commercial</option>
				</select>
			</div>
			<div class="form-group">
				<label>Area:</label>
				<input type="text" name="area" value="<?php echo $property['area']; ?>">
			</div>
			<div class="form-group">
				<label>Total Valuation:</label>
				<input type="text" name="total_valuation" value="<?php echo $property['total_valuation']; ?>">
			</div>
			<div class="form-group">
				<label>Property Status:</label>
				<select name="status">
					<option value="1" <?php if($property['status'] == 1) { echo "selected"; } ?>>Active</option>
					<option value="0" <?php if($property['status'] == 0) { echo "selected"; } ?>>Inactive</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="submit">Update Property</button>
			</div>
		</form>
	</div>
</body>
</html>
