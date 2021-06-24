<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("formulario_model");
        $this->load->model("general_model");
		$this->load->helper('form');
    }
	
	/**
	 * Ingreso del candidato
	 */
	public function index()
	{				
			$data['view'] = 'form_encuesta';
			$this->load->view('layout_calendar', $data);
	}

	/**
	 * Save info del candidato
     * @since 2/4/2021
     * @author BMOTTAG
	 */
	public function save_candidato()
	{
			header('Content-Type: application/json');
			$data = array();

			$idCandidato= $this->input->post('hddIdCandidato');
			$msj = "Se actualizarón sus datos, por favor continuar con los cuestionarios.";

			if ($idCandidato = $this->formulario_model->saveCandidato()) 
			{
				$data["result"] = true;
				$this->session->set_flashdata('retornoExito', $msj);
			} else {
				$data["result"] = "error";
				$data["mensaje"] = "Error!!! Ask for help.";
				$this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');
			}

			echo json_encode($data);
    }
	
	
}