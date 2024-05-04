<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listar_alunos() {
		$query = $this->db->query("
			SELECT alunos.nome, alunos.idade, turmas.nome AS turma, 
			TO_CHAR(alunos.data_cadastro, 'DD/MM/YYYY') AS data_cadastro
			FROM alunos
			JOIN enturmacao ON alunos.id_aluno = enturmacao.id_aluno
			JOIN turmas ON enturmacao.id_turma = turmas.id_turma
		");
	
		if ($query->num_rows() > 0) {
			return $query->result(); 
		} else {
			return array(); 
		}
	}
	
	
	
}
