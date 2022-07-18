<?php

class Casa{
private $qtd_quartos, $qtd_banheiros, $vagas_garagem, $tamanho_metros_quadrados;

public function __construct($qtd_quartos, $qtd_banheiros, $vagas_garagem, $tamanho_metros_quadrados){
$this->setQtd_quartos($qtd_quartos);
$this->setQtd_banheiros($qtd_banheiros);
$this->setVagas_garagem($vagas_garagem);
$this->setTamanho_metros_quadrados($tamanho_metros_quadrados);
}

public function getQtd_quartos(){
return $this->qtd_quartos;
}
public function getQtd_banheiros(){
return $this->qtd_banheiros;
}
public function getVagas_garagem(){
return $this->vagas_garagem;
}
public function getTamanho_metros_quadrados(){
return $this->tamanho_metros_quadrados;
}
public function setQtd_quartos($a){
	$this->qtd_quartos = $a;
}
public function setQtd_banheiros($a){
	$this->qtd_banheiros = $a;
}
public function setVagas_garagem($a){
	$this->vagas_garagem = $a;
}
public function setTamanho_metros_quadrados($a){
	$this->tamanho_metros_quadrados = $a;
}

public function Aluguel(){
if($this->tamanho_metros_quadrados > 100):
echo "Alugar por R$2.000,00";
else:
echo "Alugar por R$1.000,00";
endif;
}
}

$casa = new Casa(3, 2, 1, 220);
$casa->Aluguel();