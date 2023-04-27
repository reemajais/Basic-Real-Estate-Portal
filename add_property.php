<?php
        include ('config.php');
        include ('header.php');
        
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and sanitize
    $property_owner_name = $_POST['property_owner_name'] ?? '';
    $owner_contact = $_POST['owner_contact'] ?? '';
    $address = $_POST['address'] ?? '';
    $city = $_POST['city'] ?? '';
    $zip_code = $_POST['zip_code'] ?? '';
    $kind_of_property = $_POST['kind_of_property'] ?? '';
    $area = $_POST['area'] ?? '';
    $total_valuation = $_POST['total_valuation'] ?? '';
    $property_status = $_POST['property_status'] ?? '';

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO properties (property_owner_name, owner_contact, address, city, zip_code, kind_of_property, area, total_valuation, property_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssssssss", $property_owner_name, $owner_contact, $address, $city, $zip_code, $kind_of_property, $area, $total_valuation, $property_status);

    // Execute statement
    if ($stmt->execute()) {
        echo "Property added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

?>
