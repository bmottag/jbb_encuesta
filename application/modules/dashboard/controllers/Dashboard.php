<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("dashboard_model");
		$this->load->model("general_model");
    }
		
	/**
	 * SUPER ADMIN DASHBOARD
	 */
	public function admin()
	{				
			$arrParam = array(
				'from' => date('Y-m-d')
			);
			$arrParam = array(
				'fecha' => date('Y-m-d')
			);			
			$data['listaFormularios'] = $this->general_model->get_info_formularios($arrParam);
			$data['noFormulariosHOY'] = $data['listaFormularios']?count($data['listaFormularios']):0;

			//calculo numero de visitantes para la semana presente
			if (date('D')=='Mon'){
			     $lunes = date('Y-m-d');
			} else {
			     $lunes = date('Y-m-d', strtotime('last Monday', time()));
			}

			$domingo = strtotime('next Sunday', time());
 			$domingo = date('Y-m-d', $domingo);
 			//le sumo un dia al dia final para que ingrese ese dia en la consulta
			$domingo = date('Y-m-d',strtotime ( '+1 day ' , strtotime ($domingo)));

			$arrParam = array(
				'from' => $lunes,
				'to' => $domingo
			);
			$data['listaFormulariosSEMANA'] = $this->general_model->get_info_formularios($arrParam);
			$data['noFormulariosSEMANA'] = $data['listaFormulariosSEMANA']?count($data['listaFormulariosSEMANA']):0;

			//calculo numero de visitantes para el MES presente
			$month_start = strtotime('first day of this month', time());
			$month_start = date('Y-m-d', $month_start);
			$month_end = strtotime('last day of this month', time());
			$month_end = date('Y-m-d', $month_end);
 			//le sumo un dia al dia final para que ingrese ese dia en la consulta
			$month_end = date('Y-m-d',strtotime ( '+1 day ' , strtotime ($month_end)));

			$arrParam = array(
				'from' => $month_start,
				'to' => $month_end
			);
			$data['listaFormulariosMES'] = $this->general_model->get_info_formularios($arrParam);
			$data['noFormulariosMES'] = $data['listaFormulariosMES']?count($data['listaFormulariosMES']):0;

			$data["view"] = "dashboard";
			$this->load->view("layout_calendar", $data);
	}
	
	
}