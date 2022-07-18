<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletar extends CI_Controller {
	public function index()
	{
		$this->load->model('Listar', 'listar');
		$resultado = $this->listar->banco();
		$dados = array("tabela" => $resultado);
		$this->load->view('deletar', $dados);
	}
	public function remover(){
		$form = $this->input->post();
		$this->db->delete('cad_chamado', array('id' => $form['id']));
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Chamado deletado!');
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
