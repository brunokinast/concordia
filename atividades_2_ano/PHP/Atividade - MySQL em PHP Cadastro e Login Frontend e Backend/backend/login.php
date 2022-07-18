<?php 
  $login = $_POST['login'];
  $senha = md5($_POST['senha']);
  $connect = mysqli_connect('localhost','root','', 'trabalho_final');
  $verifica = mysqli_query($connect,"SELECT * FROM cadastrar_usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:pag.php");
        }
?>