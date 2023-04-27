<?php
// Check if property ID is provided in the URL
if(isset($_GET['property_id']) && !empty(trim($_GET['property_id']))){
    // Include database connection
    require_once "config.php";
    include 'header.php';
    
    // Prepare a delete statement
    $sql = "DELETE FROM properties WHERE property_id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_property_id);
        
        // Set parameter
        $param_property_id = trim($_GET["property_id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Property successfully deleted
            header("location: all_properties.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // Property ID not provided in the URL, redirect to all_properties page
    header("location: all_properties.php");
    exit();
}
?>
