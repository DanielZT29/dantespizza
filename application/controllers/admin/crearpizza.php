<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class crearpizza extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Productmodel');
		$this->load->library("session");
	}
	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$this->load->view('admin/crearpizza');	
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
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$categoria = $this->input->post("categoria");
        $cantidad = $this->input->post("cantidad");
        $foto = $this->input->post("foto");
		
		
		
		$data = array(
			"nombre_productos"=>$nombre,
			"Descripcion"=>$descripcion,
			"Precio"=>$precio,	
			"cantidadProducto"=>$cantidad,
            "fk_categoria"=>$categoria,
            "ImagenProducto"=>$foto

		);
	
	
			$this->Productmodel->save($data);
			$this->session->set_flashdata('succes','Se guardo el actor correctamente');
			redirect(base_url()."index.php/amenu");
		}
	

}
