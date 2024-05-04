<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserir_aluno($data) {
        return $this->db->insert('alunos', $data);
    }
	public function listar_alunos() {
		return $this->db->get('alunos')->result();
	}
	public function adicionar_aluno_turma($id_aluno, $id_turma) {
		$data = array(
			'id_aluno' => $id_aluno,
			'id_turma' => $id_turma
		);
	
		return $this->db->insert('enturmacao', $data);
	}

	public function total_alunos() {
        return $this->db->count_all('alunos');
    }
public function alunos_por_turma() {
    $query = $this->db->query("
        SELECT turmas.nome AS nome_turma, COUNT(alunos.id_aluno) AS total_alunos
        FROM alunos
        JOIN enturmacao ON alunos.id_aluno = enturmacao.id_aluno
        JOIN turmas ON enturmacao.id_turma = turmas.id_turma
        GROUP BY turmas.nome
    ");

    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
}

	
}
