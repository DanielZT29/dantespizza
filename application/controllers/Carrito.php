<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Carritomodel');
		
	}

	public function index()
	{
        $data = array("data"=>$this->Carritomodel->getCarrito());
		$this->load->view('carrito',$data);
		$this->load->helper('url');
	}
	public function borrarCarrito($id_carrito){
		$this->Carritomodel->borrarCarrito($id_carrito);
		if(! $this->db->affected_rows() == 0 ){
			redirect(base_url()."index.php/carrito");
		}
	}
   
	public function save()

	{
		$nombre_productos = $this->input->post("nombre");
		$precio = $this->input->post("precio");
		
		
		
		
		$data = array(
			"nombre_productos"=>$nombre_productos,
			"Precio"=>$precio
			
			
		);
	
	
			$this->Carritomodel->save($data);
			$this->session->set_flashdata('succes','Se guardo el actor correctamente');
			redirect(base_url()."index.php/carrito");
		}

		
}