<?php

class Cadastro{
    

    public function cadastrarUsuario($email, $cpf, $nome){
        function validaCPF($cpf){
            $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
            if (strlen($cpf) != 11) {
                return false;
            }
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                return false;
            }
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido", 1);
        }elseif(empty($nome)){
            throw new Exception("Este nome é inválido", 1);
        }elseif(!validaCPF($cpf)){
            throw new Exception("Este CPF é inválido", 1);
        }else{
            echo "Cadastrado com sucesso! <br>";
            echo "Nome: ".$nome."<br>";
            echo "E-mail: ".$email."<br>";
            echo "CPF: ".$cpf;
        }
    }
}

$cadastro = new Cadastro();

try{
$cadastro->cadastrarUsuario("contato@gmail.com","04321179033","Ana Laura");
}catch(Exception $e){
echo $e->getMessage()."<br>";
}