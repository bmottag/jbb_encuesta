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
	 * Save formulario de satisfaccion
     * @since 27/6/2021
     * @author BMOTTAG
	 */
	public function save_encuesta()
	{
			header('Content-Type: application/json');
			$data = array();

			$msj = "Se guardó la información de la encuesta!";

			if ($this->formulario_model->saveEncuesta()) 
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