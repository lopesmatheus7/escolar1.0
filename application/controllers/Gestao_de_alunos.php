<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Gestao_de_alunos extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('Aluno_model');
			$this->load->model('Turma_model');
		

		}
	
		public function index() {

			$data['alunos'] = $this->Aluno_model->listar_alunos();
			
 			$data['turmas'] = $this->Turma_model->listar_turmas();
		
			$this->load->view('alunos/gestao_de_alunos_view', $data);
		}
		
	

    public function cadastrar() {
        if ($this->input->post()) {
            $data = array(
                'nome' => $this->input->post('nome'),
                'idade' => $this->input->post('idade'),
                'email' => $this->input->post('email')
            );

            $result = $this->Aluno_model->inserir_aluno($data);

            if ($result) {
                redirect('gestao_de_alunos');
            } else {
                redirect('erro');
            }
        } else {
            redirect('formulario');
        }
    }
	
	public function adicionar_aluno_turma() {
		if ($this->input->post()) {
			$id_aluno = $this->input->post('id_aluno');
			$id_turma = $this->input->post('id_turma');
	
			$result = $this->Aluno_model->adicionar_aluno_turma($id_aluno, $id_turma);
	
			if ($result) {
				redirect('gestao_de_alunos');
			} else {
				redirect('erro');
			}
		} else {
			redirect('pagina_de_formulario');
		}
	}
	public function listar_alunos_turma($id_turma) {
		$this->load->model('Turma_model');
	
		$data['alunos_turma'] = $this->Turma_model->listar_alunos_turma($id_turma);
	
		$this->load->view('turma/lista_alunos_turma', $data);
	
	}
	
	
	
	
	
	
}

