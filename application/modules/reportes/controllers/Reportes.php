<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
		$this->load->model("reportes_model");
		$this->load->library('PHPExcel.php');
    }
	
	/**
	 * Generate Reportes in XLS
     * @since 28/06/2021
     * @author BMOTTAG
	 */
	public function generaReservaFechaXLS()
	{				
			$bandera = $this->input->post('bandera');

			if($bandera == 1 )
			{
				$data['fecha'] = $this->input->post('fecha');
				$fechaEncabezado = 'Fecha: ' . ucfirst(strftime("%b %d, %G",strtotime($data['fecha'])));
				$nombreArchivo = 'encuesta_satisfaccion_' . $data['fecha'] . '.xls';

				$arrParam = array(
					'fecha' => $this->input->post('fecha')
				);
			}else{
				$data['from'] = $this->input->post('from');
				$data['to'] = $this->input->post('to');

				$fechaEncabezado = 'Rango Fechas: ' . ucfirst(strftime("%b %d, %G",strtotime($data['from']))) . ' - ' . ucfirst(strftime("%b %d, %G",strtotime($data['to'])));
				$nombreArchivo = 'encuesta_satisfaccion_' . $data['from'] . '-' . $data['to'] . '.xls';

				$from = formatear_fecha($data['from']);
				//le sumo un dia al dia final para que ingrese ese dia en la consulta
				$to = date('Y-m-d',strtotime ( '+1 day ' , strtotime ( formatear_fecha($data['to']) ) ) );

				$arrParam = array(
					'from' => $from,
					'to' => $to
				);
			}
			$listaEncuestas = $this->reportes_model->get_encuesta($arrParam);

			// Create new PHPExcel object	
			$objPHPExcel = new PHPExcel();

			// Set document properties
			$objPHPExcel->getProperties()->setCreator("JBB APP")
										 ->setLastModifiedBy("JBB APP")
										 ->setTitle("Report")
										 ->setSubject("Report")
										 ->setDescription("JBB Report")
										 ->setKeywords("office 2007 openxml php")
										 ->setCategory("Report");
										 
			// Create a first sheet
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'REGISTROS ENCUESTA DE SATISFACCIÓN - ' . $fechaEncabezado);
						
			$objPHPExcel->getActiveSheet()->setCellValue('A3', 'ID')
										->setCellValue('B3', 'Fecha')
										->setCellValue('C3', 'Nombre del Servidor Público')
										->setCellValue('D3', 'Rango de edad del encuestado')
										->setCellValue('E3', 'Población - Condición de discapacidad')
										->setCellValue('F3', 'Población - Desplazado')
										->setCellValue('G3', 'Población - Víctima de conflicto')
										->setCellValue('H3', 'Población - Rom')
										->setCellValue('I3', 'Población - Indígena')
										->setCellValue('J3', 'Población - Raizal')
										->setCellValue('K3', 'Población - Ninguna')
										->setCellValue('L3', 'Género')
										->setCellValue('M3', 'Nacionalidad')
										->setCellValue('N3', 'Localidad')
										->setCellValue('O3', 'Barrio')
										->setCellValue('P3', '¿Qué servicio utilizó durante su visita o llamada realizada?')
										->setCellValue('Q3', 'Página Web')
										->setCellValue('R3', 'Volante/Plegable')
										->setCellValue('S3', 'Televisión')
										->setCellValue('T3', 'Redes Sociales')
										->setCellValue('U3', 'Amigo/Familiar')
										->setCellValue('V3', 'Correo electrónico')
										->setCellValue('W3', 'Prensa')
										->setCellValue('X3', 'Radio')
										->setCellValue('Y3', 'Otro')
										->setCellValue('Z3', 'Profesionalismo y claridad de la información')
										->setCellValue('AA3', 'Amabilidad y actitud de servicio')
										->setCellValue('AB3', 'Orientación y guianza')
										->setCellValue('AC3', 'Estado de las colecciones de la entidad')
										->setCellValue('AD3', 'Estado de la infraestructura e instalaciones')
										->setCellValue('AE3', '¿Cuál es su percepción frente al servicio?');

										
			$j=4;
			$total = 0; 

			if($listaEncuestas){
				foreach ($listaEncuestas as $lista):
					
	                    switch ($lista['rango_edad']) {
	                        case 1:
	                            $rangoEdad = 'Menor a 26 años ';
	                            break;
	                        case 2:
	                            $rangoEdad = '27 a 59 años';
	                            break;
	                        case 2:
	                            $rangoEdad = 'Mayor de 60 años';
	                            break;
	                    }
	                    $discapacidad = "";
	                    $desplazado = "";
	                    $victima = "";
	                    $rom = "";
	                    $indigena = "";
	                    $raizal = "";
	                    $ninguna = "";

	                    if($lista['poblacion_discapacidad'] == 1){
	                    	$discapacidad = 'X';
	                    }
	                    if($lista['poblacion_desplazado'] == 1){
	                    	$desplazado = 'X';
	                    }
	                    if($lista['poblacion_victima'] == 1){
	                    	$victima = 'X';
	                    }
	                    if($lista['poblacion_rom'] == 1){
	                    	$rom = 'X';
	                    }
	                    if($lista['poblacion_indigena'] == 1){
	                    	$indigena = 'X';
	                    }
	                    if($lista['poblacion_raizal'] == 1){
	                    	$raizal = 'X';
	                    }
	                    if($lista['poblacion_ninguna'] == 1){
	                    	$ninguna = 'X';
	                    }

                        switch ($lista['genero']) {
                            case 1:
                            	$genero = 'Hombre';
                                break;
                            case 2:
                                $genero = 'Mujer';
                                break;
                            case 3:
                                $genero = 'No responde';
                                break;
                            case 4:
                                $genero = 'Otro - ' . $lista['genero_otro'];
                                break;
                        }

                        $nacionalidad = 'Colombiano';
                        if($lista['nacionalidad']==2){
                        	$nacionalidad = 'Extranjero';
                        }	

	                    $servicio_pagina_web = "";
	                    $servicio_volante = "";
	                    $servicio_television = "";
	                    $servicio_redes = "";
	                    $servicio_amigo = "";
	                    $servicio_correo = "";
	                    $servicio_prensa = "";
	                    $servicio_radio = "";
	                    $servicio_otro = "";

	                    if($lista['servicio_pagina_web'] == 1){
	                    	$servicio_pagina_web = 'X';
	                    }
	                    if($lista['servicio_volante'] == 1){
	                    	$servicio_volante = 'X';
	                    }
	                    if($lista['servicio_television'] == 1){
	                    	$servicio_television = 'X';
	                    }
	                    if($lista['servicio_redes'] == 1){
	                    	$servicio_redes = 'X';
	                    }
	                    if($lista['servicio_amigo'] == 1){
	                    	$servicio_amigo = 'X';
	                    }
	                    if($lista['servicio_correo'] == 1){
	                    	$servicio_correo = 'X';
	                    }
	                    if($lista['servicio_prensa'] == 1){
	                    	$servicio_prensa = 'X';
	                    }
	                    if($lista['servicio_radio'] == 1){
	                    	$servicio_radio = 'X';
	                    }
	                    if($lista['servicio_otro'] == 1){
	                    	$servicio_otro = $lista['servicio_cual'];
	                    }

						$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						$objPHPExcel->getActiveSheet()->getStyle('E'.$j.':K'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						$objPHPExcel->getActiveSheet()->getStyle('Q'.$j.':X'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						$objPHPExcel->getActiveSheet()->getStyle('Z'.$j.':AD'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

						$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $lista['id_formulario'])
													  ->setCellValue('B'.$j, $lista['fecha'])
													  ->setCellValue('C'.$j, $lista['nombre_servidor'])
													  ->setCellValue('D'.$j, $rangoEdad)
													  ->setCellValue('E'.$j, $discapacidad)
													  ->setCellValue('F'.$j, $desplazado)
													  ->setCellValue('G'.$j, $victima)
													  ->setCellValue('H'.$j, $rom)
													  ->setCellValue('I'.$j, $indigena)
													  ->setCellValue('J'.$j, $raizal)
													  ->setCellValue('K'.$j, $ninguna)
													  ->setCellValue('L'.$j, $genero)
													  ->setCellValue('M'.$j, $nacionalidad)
													  ->setCellValue('N'.$j, $lista['localidad'])
													  ->setCellValue('O'.$j, $lista['barrio'])
													  ->setCellValue('P'.$j, $lista['servicio'])
													  ->setCellValue('Q'.$j, $servicio_pagina_web)
													  ->setCellValue('R'.$j, $servicio_volante)
													  ->setCellValue('S'.$j, $servicio_television)
													  ->setCellValue('T'.$j, $servicio_redes)
													  ->setCellValue('U'.$j, $servicio_amigo)
													  ->setCellValue('V'.$j, $servicio_correo)
													  ->setCellValue('W'.$j, $servicio_prensa)
													  ->setCellValue('X'.$j, $servicio_radio)
													  ->setCellValue('Y'.$j, $servicio_otro)
													  ->setCellValue('Z'.$j, $lista['calificacion_1'])
													  ->setCellValue('AA'.$j, $lista['calificacion_2'])
													  ->setCellValue('AB'.$j, $lista['calificacion_3'])
													  ->setCellValue('AC'.$j, $lista['calificacion_4'])
													  ->setCellValue('AD'.$j, $lista['calificacion_5'])
													  ->setCellValue('AE'.$j, $lista['percepcion']);
						$j++;
				endforeach;
			}

			// Set column widths							  
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(38);
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(38);
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(70);
			$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(17);
			$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(17);
			$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(18);
			$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(18);
			$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(22);
			$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(13);
			$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(22);
			$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(42);
			$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(35);
			$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(37);
			$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(40);
			$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(45);

			// Set fonts	
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFont()->setBold(true);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
			$objPHPExcel->getActiveSheet()->getStyle('A3:AE3')->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);



			// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
			$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BPersonal cash register&RPrinted on &D');
			$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

			// Set page orientation and size
			$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
			$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('Work Order');

			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);

			// redireccionamos la salida al navegador del cliente (Excel2007)
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename=' . $nombreArchivo);
			header('Cache-Control: max-age=0');

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
			  
    }

	
}