<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registraruser extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Registermodel');
		
	}

	public function index()
	{
		$this->load->view('register');
		$this->load->helper('url');
	}
	public function save()

	{
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$correo = $this->input->post("correo");
		$contraseña = $this->input->post("contraseña");
		
		
		
		$data = array(
			"nombre_usuario"=>$nombre,
			"apellido_usuario"=>$apellido,
			"correo"=>$correo,
			"contraseña"=>$contraseña,
			"fk_tipo_usuario"=>2
		);
	
	
			$this->Registermodel->save($data);
			$this->session->set_flashdata('succes','Se guardo el actor correctamente');
			redirect(base_url()."index.php/iniciosesion");
		}
}