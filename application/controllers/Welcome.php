<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
{
    $this->load->model('Aluno_model');
    $this->load->model('Turma_model');
    
    $total_alunos = $this->Aluno_model->total_alunos();

    $total_turmas = $this->Turma_model->total_turmas();
    
    $turmas = $this->Turma_model->listar_turmas();

    $alunos_por_turma = $this->Aluno_model->alunos_por_turma();
    
    $data['total_alunos'] = $total_alunos;
    $data['total_turmas'] = $total_turmas;
    $data['turmas'] = $turmas;
    $data['alunos_por_turma'] = $alunos_por_turma;
    
    $this->load->view('Welcome', $data);
}


	


}
