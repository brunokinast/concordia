<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar extends CI_Model{
	public function banco(){
		$this->db->select("id, assunto, descricao_chamado, resposta_chamado");
		$resultado = $this->db->get("cad_chamado")->result();
		return $resultado;
	}
	public function select($id){
		$resultado = $this->db->get_where("cad_chamado", array('id' => $id))->result();
		return $resultado;
	}
}