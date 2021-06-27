<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Formulario_model extends CI_Model {
		
		/**
		 * Guardar respuestas formulario
		 * @since 27/6/2021
		 */
		public function saveEncuesta() 
		{				
				$poblacion_cual =  $this->security->xss_clean($this->input->post('poblacion_cual'));
				$poblacion_cual =  addslashes($poblacion_cual);
				$genero_otro =  $this->security->xss_clean($this->input->post('genero_otro'));
				$genero_otro =  addslashes($genero_otro);
				$localidad =  $this->security->xss_clean($this->input->post('localidad'));
				$localidad =  addslashes($localidad);
				$barrio =  $this->security->xss_clean($this->input->post('barrio'));
				$barrio =  addslashes($barrio);
				$servicio =  $this->security->xss_clean($this->input->post('servicio'));
				$servicio =  addslashes($servicio);
				$servicio_cual =  $this->security->xss_clean($this->input->post('servicio_cual'));
				$servicio_cual =  addslashes($servicio_cual);
				$percepcion =  $this->security->xss_clean($this->input->post('percepcion'));
				$percepcion =  addslashes($percepcion);
				$nombre_servidor =  $this->security->xss_clean($this->input->post('nombre_servidor'));
				$nombre_servidor =  addslashes($nombre_servidor);
				$fecha =  $this->security->xss_clean($this->input->post('fecha'));
				$fecha =  addslashes($fecha);

				$data = array(
					'rango_edad' => $this->input->post('rango_edad'),
					'poblacion_discapacidad' => $this->input->post('poblacion_discapacidad'),
					'poblacion_cual' => $poblacion_cual,
					'poblacion_desplazado' => $this->input->post('poblacion_desplazado'),
					'poblacion_victima' => $this->input->post('poblacion_victima'),
					'poblacion_rom' => $this->input->post('poblacion_rom'),
					'poblacion_indigena' => $this->input->post('poblacion_indigena'),
					'poblacion_raizal' => $this->input->post('poblacion_raizal'),
					'poblacion_ninguna' => $this->input->post('poblacion_ninguna'),
					'genero' => $this->input->post('genero'),
					'genero_otro' => $genero_otro,
					'nacionalidad' => $this->input->post('nacionalidad'),
					'localidad' => $localidad,
					'barrio' => $barrio,
					'servicio' => $servicio,
					'servicio_pagina_web' => $this->input->post('servicio_pagina_web'),
					'servicio_volante' => $this->input->post('servicio_volante'),
					'servicio_television' => $this->input->post('servicio_television'),
					'servicio_redes' => $this->input->post('servicio_redes'),
					'servicio_amigo' => $this->input->post('servicio_amigo'),
					'servicio_correo' => $this->input->post('servicio_correo'),
					'servicio_prensa' => $this->input->post('servicio_prensa'),
					'servicio_radio' => $this->input->post('servicio_radio'),
					'servicio_otro' => $this->input->post('servicio_otro'),
					'servicio_cual' => $servicio_cual,
					'calificacion_1' => $this->input->post('calificacion_1'),
					'calificacion_2' => $this->input->post('calificacion_2'),
					'calificacion_3' => $this->input->post('calificacion_3'),
					'calificacion_4' => $this->input->post('calificacion_4'),
					'calificacion_5' => $this->input->post('calificacion_5'),
					'percepcion' => $percepcion,
					'nombre_servidor' => $nombre_servidor,
					'fecha' => $fecha
				);	
				$query = $this->db->insert('repuestas_formulario', $data);
				if ($query) {
					return true;
				} else {
					return false;
				}
		}

		
	    
	}