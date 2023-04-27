<?php
include 'header.php';

require_once 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$brokerName = isset($_POST['name']) ? $_POST['name'] : '';
$brokerContact = isset($_POST['contact']) ? $_POST['contact'] : '';
$brokerEmail = isset($_POST['email']) ? $_POST['email'] : '';
$brokerExperience = isset($_POST['experience']) ? $_POST['experience'] : '';
$propertyId = isset($_POST['property_id']) ? $_POST['property_id'] : '';
$brokerCommission = isset($_POST['commission']) ? $_POST['commission'] : '';
$brokerStatus = isset($_POST['status']) ? $_POST['status'] : '';


// Assuming the form data has been submitted via POST method

// Perform input validation

// If input validation is successful, insert the data into the "brokers" table
$query = "INSERT INTO brokers (broker_name, broker_contact, broker_email, broker_experience, property_id, broker_commission, broker_status) VALUES ('$brokerName', '$brokerContact', '$brokerEmail', '$brokerExperience', '$propertyId', '$brokerCommission', '$brokerStatus')";

$result = mysqli_query($conn, $query);

if($result){
   // Insertion successful, display success message
   echo "Broker added successfully!";
   // You can also display a link to return to the broker panel page
} else {
   // Insertion failed, display error message
   echo "Error adding broker: " . mysqli_error($conn);
}

?>
mysqli_close($conn);

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="add_broker.css">
   </head>
<body>
    <div class="add-broker-form">
  <h2>Add Broker</h2>
  <form action="add_broker.php" method="post">
    <label for="name">Broker Name</label>
    <input type="text" id="name" name="name" required>
    <label for="contact">Broker Contact</label>
    <input type="text" id="contact" name="contact" required>
    <label for="email">Broker Email</label>
    <input type="email" id="email" name="email" required>
    <label for="experience">Broker Experience (in Yr.)</label>
    <input type="number" id="experience" name="experience" required>
    <label for="property">Select Property</label>
    <?php
// Fetch properties from database
$query = "SELECT * FROM properties";
$result = mysqli_query($conn, $query);

// Display properties in dropdown menu
echo "<select name='property_id'>";
while($row = mysqli_fetch_assoc($result)){
   echo "<option value='".$row['property_id']."'>".$row['property_name']."</option>";
}
echo "</select>";
?>
    <select id="property" name="property">
      <option value="property1">Property 1</option>
      <option value="property2">Property 2</option>
      <option value="property3">Property 3</option>
    </select>
    <label for="commission">Broker Commission (%)</label>
    <input type="number" id="commission" name="commission" required>
    <label for="status">Broker Status</label>
    <select id="status" name="status">
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
    <button type="submit">Add Broker</button>
    <?php
    if($result){
   // Insertion successful, display success message
   echo "Broker added successfully! <a href='broker_panel.php'>Return to Broker Panel</a>";
} else {
   // Insertion failed, display error message
   echo "Error adding broker: " . mysqli_error($conn);
}
?>

  </form>
</div>

</body>
</html>