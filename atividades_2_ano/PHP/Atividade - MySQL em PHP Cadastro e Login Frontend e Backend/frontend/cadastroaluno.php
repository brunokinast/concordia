<?php 
 
$nome_aluno = $_POST['nome_aluno'];
$cep = $_POST['cep'];
$numero_casa = $_POST['numero_casa'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$connect = mysqli_connect('localhost','root','', 'trabalho_final');
$query = 
"INSERT INTO cadastrar_alunos (nome_aluno,cep,numero_casa,email,telefone) VALUES ('$nome_aluno','$cep','$numero_casa','$email','$telefone')";
$insert = mysqli_query($connect, $query);
  if($insert){
    echo"<script language='javascript' type='text/javascript'>alert('Aluno cadastrado com sucesso!');window.location.href='index.html';</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse aluno');window.location.href='index.html';</script>";
  }
?>