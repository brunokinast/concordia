<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Listar', 'listar');
		$resultado = $this->listar->banco();
		$dados = array("tabela" => $resultado);
		$this->load->view('home', $dados);
	}
}
