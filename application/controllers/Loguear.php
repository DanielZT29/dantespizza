<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loguear extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->model("Productmodel");
		$this->load->library("session");
		

	}

	public function index($u=false){
		$datos['error'] = $u?  "Usuario o contraseña Incorrecto": '';
		$this->load->view('login',$datos);
	}

	public function login(){
		//Validar usuario y contraseña
		if($this->input->post()){
			$usuario = $this->M_login->usuario($this->input->post('Usuario'),$this->input->post('Password'));
			if(is_object ($usuario)){
				$this->session->set_userdata('Rol', $usuario->fk_tipo_usuario);
				$this->session->set_userdata('usuario', $usuario->nombre_usuario);
				if($usuario->fk_tipo_usuario == 1 ){
					$data = array("data"=>$this->Productmodel->getProduct(1));
					$this->load->view('admin/menu', $data);
				}
				else if($usuario->fk_tipo_usuario == 2){
					$this->load->view('indexpizza');
				}
			}
			else{
				$this->index(true);
			}
		}
		else{
			$this->index(true);
		}
	}

	public function salir()
	{
		
		$this->session->sess_destroy();
		header('Location:'.base_url()."index.php/iniciosesion");
	}
	

}
