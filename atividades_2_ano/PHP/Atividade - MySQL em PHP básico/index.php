<!DOCTYPE html>
<html>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "escola";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		echo "Creating database...";

		$sql = "CREATE DATABASE escola";
		if ($conn->query($sql) === TRUE) {
		    echo "Database created successfully";
		} else {
		    echo "Error creating database: " . $conn->error;
		}
		$conn->close();
		echo "Connecting to database...";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} else {
			echo "Connected successfully";
		}
		echo "Creating tables...";
		$sql = "CREATE TABLE cadastro_alunos (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		primeironome VARCHAR(20) NOT NULL,
		sobrenome VARCHAR(20) NOT NULL,
		email VARCHAR(50) NOT NULL,
		login VARCHAR(20) NOT NULL,
		senha VARCHAR(20) NOT NULL,
		nomedodog VARCHAR(50) NOT NULL,
		nomeresponsavel1 VARCHAR(20) NOT NULL,
		nomeresponsavel2 VARCHAR(20) NOT NULL,
		data_registro TIMESTAMP
		)";
		if ($conn->query($sql) === TRUE) {
    		echo "Table cadastro_alunos created successfully";
		} else {
    		echo "Error creating table: " . $conn->error;
		}
		$sql = "CREATE TABLE cadastro_professores (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		primeironome VARCHAR(20) NOT NULL,
		sobrenome VARCHAR(20) NOT NULL,
		email VARCHAR(50) NOT NULL,
		login VARCHAR(20) NOT NULL,
		senha VARCHAR(20) NOT NULL,
		setor VARCHAR(10) NOT NULL,
		disciplina VARCHAR(20) NOT NULL,
		gostadepao VARCHAR(3) NOT NULL,
		data_registro TIMESTAMP
		)";
		if ($conn->query($sql) === TRUE) {
    		echo "Table cadastro_professores created successfully";
		} else {
    		echo "Error creating table: " . $conn->error;
		}
		echo "Creating new records...";
		$sql = "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2)
		VALUES ('Jao', 'Jaozao', 'john@example.com', 'jooj', 'jooj2088', 'rodolfo', 'jorja', 'Jaozao');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";
		$sql .= "INSERT INTO cadastro_professores (primeironome, sobrenome, email, login, senha, setor, disciplina, gostadepao)
		VALUES ('Prof', 'Astolfo', 'astolfo@example.com', 'asmatico', 'grandejooj', 'aquatico', 'natacao', 'muito');";

		if ($conn->multi_query($sql) === TRUE) {
    	echo "New records created successfully";
		} else {
    	echo "Error: " . $sql . "" . $conn->error;
		}
		$conn->close();
		echo "Finished";
	?>
</body>
</html>