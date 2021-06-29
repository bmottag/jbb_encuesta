<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Reportes_model extends CI_Model {
	    
		/**
		 * Consulta listado de encuestas
		 * @since 28/6/2021
		 */
		public function get_encuesta($arrData)
		{
				$this->db->select();
				if (array_key_exists("fecha", $arrData) && $arrData["fecha"] != '') {
					$this->db->like('fecha', $arrData["fecha"]); 
				}
				if (array_key_exists('from', $arrData) && $arrData['from'] != '') {
					$this->db->where('fecha >=', $arrData["from"]);
				}				
				if (array_key_exists('to', $arrData) && $arrData['to'] != '' && $arrData['from'] != '') {
					$this->db->where('fecha <', $arrData["to"]);
				}

				$this->db->order_by('fecha', 'asc');

				$query = $this->db->get('repuestas_formulario');

				if ($query->num_rows() > 0) {
					return $query->result_array();
				} else {
					return false;
				}
		}
		
		
		
		
	    
	}