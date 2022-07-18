<?php
	if (isset($_COOKIE['login'])) {
		$login = $_COOKIE['login'];
	}
    if(isset($login)){
      echo"Bem-Vindo, $login <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>