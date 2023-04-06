<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crearsucursal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Sucursalesmodel');
		
	}

	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$this->load->view('admin/crearsucursal');	
			}
			else{
				$this->load->view('login');	
			}
		}
		else{
			$this->load->view("login");
		}
	}

	public function validar(){
		if($this->session->userdata('Rol')!=null)
			return true;
		else
			return false;
		}
    public function save()

	{
		$nombre = $this->input->post("nombre");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
        $foto = $this->input->post("foto");
		
		
		
		$data = array(
			"nombre"=>$nombre,
			"telefono"=>$telefono,
			"direccion"=>$direccion,	
            "imagenSucursal"=>$foto

		);
	
	
			$this->Sucursalesmodel->save($data);
			$this->session->set_flashdata('succes','Se guardo el actor correctamente');
			redirect(base_url()."index.php/asucursales");
		}
	

}
