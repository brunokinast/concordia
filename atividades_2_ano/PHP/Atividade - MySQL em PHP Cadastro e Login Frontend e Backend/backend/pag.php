<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="margin: 0px; padding-top: 15px; background-color: #f5f5f5">
	<div>
		<div style="width: 80%; background-color: white; margin-left: auto; margin-right: auto; border-radius: 15px; padding: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			<h2>Cadastros dos Alunos</h2>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "trabalho_final";
			if (isset($_COOKIE['login'])) {
				$cookie = $_COOKIE['login'];
			}
			if (isset($cookie)) {
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM cadastrar_alunos";
			$result = $conn->query($sql);
			function display_data($data) {
			    $output = "<table>";
			    foreach($data as $key => $var) {
			        //$output .= '<tr>';
			        if($key===0) {
			            $output .= '<tr>';
			            foreach($var as $col => $val) {
			                $output .= "<td>" . $col . '</td>';
			            }
			            $output .= '</tr>';
			            foreach($var as $col => $val) {
			                $output .= '<td>' . $val . '</td>';
			            }
			            $output .= '</tr>';
			        }
			        else {
			            $output .= '<tr>';
			            foreach($var as $col => $val) {
			                $output .= '<td>' . $val . '</td>';
			            }
			            $output .= '</tr>';
			        }
			    }
			    $output .= '</table>';
			    echo $output;
			}
			display_data($result);
			$conn->close();
			}else{
				echo"Faça login primeiro!";
			}
			?>
		</div>
		<div style="width: 80%; background-color: white; margin-left: auto; margin-right: auto; border-radius: 15px; padding: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 15px;">
			<h2>Cadastros dos Usuários</h2>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "trabalho_final";
			if (isset($_COOKIE['login'])) {
				$cookie = $_COOKIE['login'];
			}
			if (isset($cookie)) {
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM cadastrar_usuarios";
			$result = $conn->query($sql);
			display_data($result);
			$conn->close();
			}else{
				echo"Faça login primeiro!";
			}
			?>
		</div>
	</div>
</body>
</html>