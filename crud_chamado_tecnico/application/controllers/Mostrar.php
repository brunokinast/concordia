<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller {
	public function respondido($id)
	{
		$this->load->model("Listar","listar");
		$resultado = $this->listar->select($id);
		$dados = array("tabela" => $resultado);
		$this->load->view("respondido", $dados);
	}
	public function responder($id)
	{
		$this->load->model("Listar", "listar");
		$resultado = $this->listar->select($id);
		$dados = array("tabela" => $resultado);
		$this->load->view("responder", $dados);
	}
	public function atualizar($id){
		$this->db->where('id', $id);
		$form = $this->input->post();
		$this->db->update('cad_chamado', $form);
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Chamado respondido!');
					location='/chamado_tecnico/';
				</script>";
		}else{
			echo "<script type='text/javascript'>
					alert('Algo deu errado!');
					location='/chamado_tecnico/';
				</script>";
		}
	}
}
