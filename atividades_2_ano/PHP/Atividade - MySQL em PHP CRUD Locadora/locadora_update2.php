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

$sql = "UPDATE cadastra_clientes SET endereco='Rua José 242' WHERE cpf='127.965.703-50';";
$sql .= "UPDATE cadastra_clientes SET endereco='Almeida Colmeia 323' WHERE cpf='129.272.576-59';";
$sql .= "UPDATE cadastra_clientes SET endereco='Rua Aurora Alta 633' WHERE cpf='185.466.735-18';";
$sql .= "UPDATE cadastra_clientes SET endereco='Rua João Pinto 584' WHERE cpf='206.635.279-43';";
$sql .= "UPDATE cadastra_clientes SET endereco='Rua Lolzinho 892' WHERE cpf='236.967.069-38'";

if ($conn->multi_query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>