<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Model{
	public function listar(){
		$this->db->select("id, nome_pc, quantidade, preco_compra, preco_venda");
		$resultado = $this->db->get("cadastro_pc")->result();
		return $resultado;
	}
}