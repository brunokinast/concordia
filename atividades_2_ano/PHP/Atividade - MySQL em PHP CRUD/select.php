<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, primeironome, sobrenome, email, login, senha, nomedodog, nomeresponsavel1, nomeresponsavel2, data_registro FROM cadastro_alunos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Nome: " . $row["primeironome"]. " " . $row["sobrenome"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>