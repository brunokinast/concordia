<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criar extends CI_Controller {
	public function index()
	{
		$this->load->view("criar");
	}
	public function cadastrar()
	{
		$form = $this->input->post();
		$this->db->insert('cad_chamado', $form);
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Chamado criado!');
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
