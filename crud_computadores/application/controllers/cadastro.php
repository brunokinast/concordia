<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastro extends CI_Controller {
	public function index(){
		echo "<h1>Seja bem-vindo!</h1>";
	}
	public function listar_bruto(){
		$this->load->model("View", "view");
		$resultado = $this->view->listar();
		echo "<pre>";
		var_dump($resultado);
	}
	public function listar(){
		$this->load->model("View", "view");
		$resultado = $this->view->listar();
		$dados = array("lista" => $resultado);
		$this->load->view("Lista", $dados);
	}
	public function adicionar(){
		$this->load->view("Adicionar");
	}
	public function remover(){
		$this->load->view("Remover");
	}
	public function atualizar(){
		$this->load->view("Atualizar");
	}
	public function adicionarfunc(){
		$form = $this->input->post();
		$this->db->insert('cadastro_pc', $form);
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Adicionado!');
					location='/projeto1_ci/';
				</script>";
		}else{
			echo "<script type='text/javascript'>
					alert('Algo deu errado!');
					location='/projeto1_ci/';
				</script>";
		}
	}
	public function removerfunc(){
		$form = $this->input->post();
		$this->db->where('id', $form['id']);
		$this->db->delete('cadastro_pc');
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Removido!');
					location='/projeto1_ci/';
				</script>";
		}else{
			echo "<script type='text/javascript'>
					alert('Algo deu errado!');
					location='/projeto1_ci/';
				</script>";
		}
	}
	public function atualizarfunc(){
		$form = $this->input->post();
		$this->db->where('id', $form['id']);
		unset($form['id']);
		$this->db->update('cadastro_pc', $form);
		if ($this->db->affected_rows() >= 1) {
			echo "<script type='text/javascript'>
					alert('Atualizado!');
					location='/projeto1_ci/';
				</script>";
		}else{
			echo "<script type='text/javascript'>
					alert('Algo deu errado!');
					location='/projeto1_ci/';
				</script>";
		}
	}
}