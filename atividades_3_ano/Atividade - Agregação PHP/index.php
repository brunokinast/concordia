<?php
class Curso{
	public $nome, $descricao, $valor;
	function __construct($nome, $descricao, $valor){
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->valor = $valor;
	}
	function exibirInfo(){
		echo $this->nome."<br>".$this->descricao."<br>".$this->valor."<hr>";
	}
}
class Carrinho{
	public $carrinho = [];
	public function exibirCarrinho(){
		foreach ($this->carrinho as $curso) {
			$curso->exibirInfo();
		}
	}
	public function adicionarCarrinho($item){
		array_push($this->carrinho, $item);
	}
}
$Matematica = new Curso("Matemática","Cursinho pra aprender soma!","R$20,00");
$Portugues = new Curso("Portugues","Cursinho pra aprender palavras!","Vinte reais e zero centavos");
$Ingles = new Curso("Inglês","Cursinho pra aprender words!","$20.00");
$Biologia = new Curso("Biologia","Bora abrir uns sapos!","R$20,00 + um sapo");
$Artes = new Curso("Artes","Bora pintar uns sapos!","R$20,00 + tinta guache + sapo");
$Matematica2 = new Curso("Matemática 2","Cursinho pra aprender subtração!","-R$20,00");
$Portugues2 = new Curso("Português 2","Cursinho pra aprender a usar palavras!","Vinte reais e zero centavos, por favor!");
$Ingles2 = new Curso("Inglês 2","Cursinho pra aprender a falar words!","Twenty dollars");
$Biologia2 = new Curso("Biologia 2","Bora abrir uns cachorro!","R$20,00 + um cachorro");
$Artes2 = new Curso("Artes 2","Bora pintar uns cachorro!","R$20,00 + tinta guache + cachorro");

$Carrinho = new Carrinho();
$Carrinho->adicionarCarrinho($Matematica);
$Carrinho->adicionarCarrinho($Portugues);
$Carrinho->adicionarCarrinho($Ingles);
$Carrinho->adicionarCarrinho($Biologia);
$Carrinho->adicionarCarrinho($Artes);
$Carrinho->adicionarCarrinho($Matematica2);
$Carrinho->adicionarCarrinho($Portugues2);
$Carrinho->adicionarCarrinho($Ingles2);
$Carrinho->adicionarCarrinho($Biologia2);
$Carrinho->adicionarCarrinho($Artes2);

$Carrinho->exibirCarrinho();

?>