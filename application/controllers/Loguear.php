<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loguear extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		

	}

	public function index(){	
		$datos['error'] = "Usuario Incorrecto";
		$this->load->view('login',$datos);
	}

	public function login(){
		//Validar usuario y contraseña
		if($this->input->post()){
			$usuario = $this->M_login->usuario($this->input->post('Usuario'),$this->input->post('Password'));

			if(is_object ($usuario)){
				$this->session->set_userdata('Rol', $usuario->fk_tipo_usuario);
				$Rol = $this->session->userdata('Rol');  if($this->session->userdata('Rol') == 1 ) { 
					redirect(base_url()."index.php/amenu");
					
				}  
			}
			if(is_object ($usuario)){
				$this->session->set_userdata('Rol', $usuario->fk_tipo_usuario);
				$Rol = $this->session->userdata('Rol');  if($this->session->userdata('Rol') == 2) { 
					redirect(base_url()."index.php/pizzeria");
					
				}  
			}
				
				else{
					redirect(base_url()."404_override");
				}
			}
			
	}


	public function salir()
	{
		session_start();
		session_destroy();
		header('Location:'.base_url()."index.php/iniciosesion");
	}
	

}
