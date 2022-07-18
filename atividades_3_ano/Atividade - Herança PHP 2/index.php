<?php

class estoque{
	public $nomeprod, $descricao, $fornecedor, $quantidade, $precocompra, $precovenda;

	public function Enviar(){
	echo "Enviando informação ";
	}

	public function Enviada(){
	echo "Erro na operação: ";
	}

	public function getnomeprod(){
		return $this->prod;
	}

	public function setnomeprod($P){
		$this->prod = $P;
	}

	public function getfornecedor(){
		return $this->fornecedor;
	}

	public function setfornecedor($F){
		$this->fornecedor = $F;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setQuantidade($Q){
		$this->quantidade = $Q;
	}

	public function listarquantidade(){
		if ($this->quantidade <= "10"):
		echo "Mouse";
		else:
		echo "Mais de 10 unidades em estoque";
		endif;
		
	}
}

	$estoque = new estoque();



	class depinformatica extends estoque{  
	public function nomeproduto(){
	echo "Enviando nome do produto";}
	}

	class deptelefonia extends estoque{  
	public function envdescricao(){
	echo "Enviando descrição detalhada do produto";}
	}

	class acessorios extends estoque{  
	public function envalores(){
	echo "Enviando valores do produto";}
	}



$estoque= new estoque();
$estoque->setQuantidade("1");
$estoque->setfornecedor("IBM,Microsoft e Samsung");
echo "<br>";
echo "Fornecedores:";
echo "<br>";
echo $estoque->getfornecedor();echo "<br>";
echo "<br>";
$estoque->listarquantidade();
echo "<br>";

echo "<br>";
$depinformatica = new depinformatica();
$depinformatica->nomeprod = "Mouse";
$depinformatica->Enviar();
echo "<br>";
$depinformatica->nomeproduto();
echo "<br>";

$acessorios = new acessorios();
echo "<br>";
$acessorios->precocompra= "R$200,00";
$acessorios->precovenda= "R$300,00";
$acessorios->Enviada();
echo "<br>";
$acessorios->envalores();
echo "<br>";


#region
$deptelefonia = new deptelefonia();
echo "<br>";
$deptelefonia->Enviar();
echo "<br>";
$deptelefonia->envdescricao();
echo "<br>";
#endregion