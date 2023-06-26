<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	//agregar el constructor para iniciar la clase
	function __construct()
	{
		parent::__construct();
		$this->load->model("Reporte"); //llamar al modelo con el mismo nombre
	}

	public function presidentes(){
			$data["candidato1"]=$this->Reporte->obtenerPresidentes();
			$this->load->view('header');
			$this->load->view('reportes/presidentes',$data);
			$this->load->view('footer');
		}
		public function nacionales(){
				$data["candidato2"]=$this->Reporte->obtenerNacionales();
				$this->load->view('header');
				$this->load->view('reportes/nacionales',$data);
				$this->load->view('footer');
			}
			public function provinciales(){
					$data["candidato3"]=$this->Reporte->obtenerProvinciales();
					$this->load->view('header');
					$this->load->view('reportes/provinciales',$data);
					$this->load->view('footer');
				}
				public function total(){
						$data["candidato1"]=$this->Reporte->obtenerPresidentes();
						$data["candidato2"]=$this->Reporte->obtenerNacionales();
						$data["candidato3"]=$this->Reporte->obtenerProvinciales();
						$this->load->view('header');
						$this->load->view('reportes/total',$data);
						$this->load->view('footer');
					}


}//cierre de la clase
