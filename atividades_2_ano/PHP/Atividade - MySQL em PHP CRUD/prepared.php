<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO cadastro_alunos (primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $primeironome, $sobrenome, $email, $login, $senha, $nomedodog, $nomeresponsavel1, $nomeresponsavel2);

// set parameters and execute
$primeironome = "JooJ";
$sobrenome = "Jorgin";
$email = "meunomeejulia@gmail.com";
$login = "jooj";
$senha = "jooj";
$nomedodog = "Jog";
$nomeresponsavel1 = "Jorja";
$nomeresponsavel2 = "Jorjão";
$stmt->execute();

$primeironome = "Renato";
$sobrenome = "Estralando";
$email = "estralamuito@gmail.com";
$login = "estralar";
$senha = "renatao";
$nomedodog = "Renatinho";
$nomeresponsavel1 = "Felps";
$nomeresponsavel2 = "Aqua";
$stmt->execute();

$primeironome = "LL";
$sobrenome = "E";
$email = "IWADE@gmail.com";
$login = "PAE";
$senha = "DE";
$nomedodog = "LEA";
$nomeresponsavel1 = "E";
$nomeresponsavel2 = "TO IE";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>