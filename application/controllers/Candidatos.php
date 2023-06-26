<?php
class Candidatos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("candidato");
	}
	public function index()
	{
		$data["listadoCandidatos"]=$this->candidato->obtenerTodo();
		$this->load->view('header');
		$this->load->view('candidatos/index',$data);
    	$this->load->view('footer');
	}

    public function nuevos(){
        $this->load->view('header');
		$this->load->view('candidatos/nuevos');
		$this->load->view('footer');
  }
		// public function nacionales(){
		// 		$this->load->view('header');
		// 		$this->load->view('candidatos/nacionales');
		// 		$this->load->view('footer');
		// 	}
		// 	public function provinciales(){
		// 			$this->load->view('header');
		// 			$this->load->view('candidatos/provinciales');
		// 			$this->load->view('footer');
		// 		}
		// 		public function total(){
		// 				$this->load->view('header');
		// 				$this->load->view('candidatos/total');
		// 				$this->load->view('footer');
		// 			}
					public function listas(){
							$this->load->view('header');
							$this->load->view('candidatos/index');
							$this->load->view('footer');
						}
						public function izquierdas(){
								$this->load->view('header');
								$this->load->view('candidatos/index');
								$this->load->view('footer');
							}
	public function guardarCandidatos(){
		$datosNuevo=array(
      "dignidad_cand"=>$this->input->post("dignidad_cand"),
      "nombre_cand"=>$this->input->post("nombre_cand"),
      "apellido_cand"=>$this->input->post("apellido_cand"),
      "movimiento_cand"=>$this->input->post("movimiento_cand"),
      "cedula_cand"=>$this->input->post("cedula_cand"),
      "correo_cand"=>$this->input->post("correo_cand"),
	  "telefono_cand"=>$this->input->post("telefono_cand"),
	  "latitud_cand"=>$this->input->post("latitud_cand"),
	  "longitud_cand"=>$this->input->post("longitud_cand")
		);
		print_r($datosNuevo);
		if ($this->candidato->insertar($datosNuevo)) {
      echo "<h1>informacion ingresada</h1>";
	  redirect('candidatos/index');
		}else{
      echo "<h1>Error al insertar</h1>";
		}

		}

	public function borrar($id_cand){
		if ($this->candidato->eliminarPorId($id_cand)) {

		} else {

		}
		redirect('candidatos/index');
	}

}//no cerrar
