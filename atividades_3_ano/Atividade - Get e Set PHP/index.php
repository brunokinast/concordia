<?php

class Carro{
	private $placa, $numero_chassi, $marca, $modelo, $ano;
	public function getPlaca(){
		return $this->placa;
	}
	public function getNumero_chassi(){
		return $this->numero_chassi;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function getAno(){
		return $this->ano;
	}
	public function setPlaca($a){
		$this->placa = $a;
	}
	public function setNumero_chassi($a){
		$this->numero_chassi = $a;
	}
	public function setMarca($a){
		$this->marca = $a;
	}
	public function setModelo($a){
		$this->modelo = $a;
	}
	public function setAno($a){
		$this->ano = $a;
	}
	public function IPVA(){
		if($this->ano > 1999):
			echo "Esse carro paga IPVA";
		else:
			echo "Esse carro não paga IPVA";
		endif;
	}
}

$carro = new Carro();
$carro->setPlaca("IXM2322");
$carro->setNumero_chassi("CPCBLCX11000237");
$carro->setMarca("Xevrolé");
$carro->setModelo("Van");
$carro->setAno(2001);
echo "<br>";
echo $carro->IPVA();
echo "<br>";