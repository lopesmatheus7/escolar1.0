<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }

    public function inserir_turma($data) {
        return $this->db->insert('turmas', $data);
    }
	public function listar_turmas() {
		$this->db->select('turmas.*, COUNT(enturmacao.id_aluno) AS total_alunos');
		$this->db->from('turmas');
		$this->db->join('enturmacao', 'turmas.id_turma = enturmacao.id_turma', 'left');
		$this->db->group_by('turmas.id_turma');
		return $this->db->get()->result();
	}
	
	
	public function listar_alunos_turma($id_turma) {
		$this->db->select('alunos.*');
		$this->db->from('enturmacao');
		$this->db->join('alunos', 'enturmacao.id_aluno = alunos.id_aluno');
		$this->db->where('enturmacao.id_turma', $id_turma);
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	public function total_turmas() {
        return $this->db->count_all('turmas');
    }
	
	
}
