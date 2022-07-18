<?php

abstract class Investimento{
protected $capital;
protected $saldo;
protected $juros;

public function setCapital($c){
$this->capital = $c;
}

public function setSaldo($s){
$this->saldo = $s;
}

public function setJuros($j){
$this->juros = $j;
}

public function getCapital(){
	return $this->capital;
}

public function getSaldo(){
	return $this->saldo;
}

public function getJuros(){
	return $this->juros;
}

/*abstract protected function Sacar($s);
abstract protected function Depositar($d);*/
}

class Investidor extends Investimento{

	public function Operacao(){
		$this->saldo = $this->capital * $this->juros; 
	}

}
echo "Investidor 1: <br>";
$investidor1 = new Investidor();
$investidor1->setCapital(10000);
echo "Capital Inicial: ".$investidor1->getCapital()."<br>";
$investidor1->setJuros(1.012);
echo "Juros: ".$investidor1->getJuros()."<br>";
echo $investidor1->getSaldo()."<br>";
$investidor1->Operacao();
echo "Saldo Final: ".$investidor1->getSaldo()."<br>";
echo "<hr>";
echo "Investidor 2: <br>";
$investidor2 = new Investidor();
$investidor2->setCapital(2000);
echo "Capital Inicial: ".$investidor2->getCapital()."<br>";
$investidor2->setJuros(1.005);
echo "Juros: ".$investidor2->getJuros()."<br>";
echo $investidor2->getSaldo()."<br>";
$investidor2->Operacao();
echo "Saldo Final: ".$investidor2->getSaldo()."<br>";