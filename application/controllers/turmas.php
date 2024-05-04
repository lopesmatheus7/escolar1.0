<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('Turma_model');
        $this->load->model('Aluno_model');
    }

    public function index() {
        $data['turmas'] = $this->Turma_model->listar_turmas();

        $total_alunos = $this->Aluno_model->total_alunos();

        $data['total_alunos'] = $total_alunos;

        $this->load->view('turma/turmas', $data);
    }

	
    public function cadastrar() {
       
        $data = array(
            'nome' => $this->input->post('nome'),
            'ano' => $this->input->post('ano')
         
        );


        $result = $this->Turma_model->inserir_turma($data);

        if ($result) {
            redirect('turmas');
        } else {
            redirect('erro');
        }
    }


}
