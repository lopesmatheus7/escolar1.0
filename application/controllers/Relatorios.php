<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/fpdf/fpdf.php';

class Relatorios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carregar a biblioteca FPDF
        $this->load->library('fpdf/fpdf');
        $this->load->model('Relatorios_model');
		$this->load->model('Turma_model');

    }

	public function gerar_relatorio() {
		$pdf = new FPDF();
		$pdf->AddPage();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->SetTextColor(0, 0, 0); 
		
		$pdf->SetFont('Arial', 'B', 20); 
		$pdf->Cell(0, 20, utf8_decode('Relatório de Alunos'), 0, 1, 'C');
				
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(60, 10, utf8_decode('Nome'), 1, 0, 'C');
		$pdf->Cell(30, 10, utf8_decode('Idade'), 1, 0, 'C'); 
		$pdf->Cell(60, 10, utf8_decode('Turma'), 1, 0, 'C'); 
		$pdf->Cell(40, 10, utf8_decode('Data de Cadastro'), 1, 1, 'C'); 

		$pdf->SetFont('Arial', '', 12);
		$alunos = $this->Relatorios_model->listar_alunos();
		foreach ($alunos as $aluno) {
			$pdf->Cell(60, 10, utf8_decode($aluno->nome), 1, 0);
    $pdf->Cell(30, 10, utf8_decode($aluno->idade), 1, 0, 'C');
    $pdf->Cell(60, 10, utf8_decode($aluno->turma), 1, 0);
	$pdf->Cell(40, 10, $aluno->data_cadastro, 1, 1, 'C'); 
}
		
	
		$pdf->SetY(-35);
		$pdf->Image(base_url('assets/inpi.png'), 10, $pdf->GetY(), 30);
		
	
		$pdf->Output('relatorio_alunos.pdf', 'I'); 
	}
}	
