<?php   header('Content-type:text/html; charset=utf-8');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "locadora";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully<br><br>";
		
		$sql = "SELECT * from cadastra_veiculos WHERE cor='Branco'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
        	echo "Placa: " . $row["placa"]. " - Modelo: " . $row["modelo"]. " - Marca: " . $row["marca"]. " - Cor: " . $row["cor"] . "<br>";
    	}
		} else {
    	echo "0 results";
		}
		$conn->close();
?>