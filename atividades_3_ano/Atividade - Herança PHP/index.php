<?php

class Cadastro{
	public $cpf;
	public $nome;
	public $endereco;
	public $email;
	public $telefone;
}

class Aluno extends Cadastro{
	public function mostrarCPF(){
		echo $cpf;
	}
	public function mostrarNome(){
		echo $nome;
	}
}

class Professor extends Cadastro{
	public function mostrarEmail(){
		echo $cpf;
	}
	public function mostrarNome(){
		echo $nome;
	}
}

$rodolfo = new Aluno();
$rodolfo->cpf = "61185985660";
$rodolfo->nome = "Rodolfo Almeida";
echo "<br>";
$rodolfo->mostrarCPF();
echo "<br>";
$rodolfo->mostrarNome();
echo "<br>";

$professor = new Professor();
$professor->email = "61158745960";
$professor->nome = "Almeidinha Profii";
echo "<br>";
$professor->mostrarEmail();
echo "<br>";
$professor->mostrarNome();
echo "<br>";
