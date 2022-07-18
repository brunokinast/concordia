<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locadora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE cadastra_veiculos SET placa='IXM-9921' WHERE placa='IZM-9998';";
$sql .= "UPDATE cadastra_veiculos SET placa='ISS-2314' WHERE placa='IBK-4597'";

if ($conn->multi_query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>