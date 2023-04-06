<?php

class C_inventario extends CI_Controller{
	public function __construct() {
		parent :: __construct();
		$this->load->model('M_inventario');
		$this->load->helper('url');
		$this->load->library("session");
	}

	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$data = array("data"=>$this->Sucursalesmodel->getinventario());
				$this->load->view('admin/inventario', $data);	
			}
			else{
				$data = array("data"=>$this->Sucursalesmodel->getinventario());
				$this->load->view('menu', $data);	
			}
		}
		else{
			$data = array("data"=>$this->Sucursalesmodel->getinventario());
			$this->load->view("menu", $data);
		}
	}
	public function validar(){
		if($this->session->userdata('Rol')!=null)
			return true;
		else
			return false;
	}	

  	public function inventario()
	{   
            //print_r($this->input->post());
			$datos['Inventario']= $this->M_inventario->getinventario();
			$this->load->view('admin/inventario', $datos);
	}

	public function guardarProducto()
	{
		//print_r($this->input->post());
		if($this->input->post()){
			$this->M_inventario->guardarProducto($this->input->post());
			if(! $this->db->affected_rows() == 0 ){
				redirect(base_url()."index.php/ainventario");
			}
		}
	}

	public function borrarProducto($id_inventario)
	{
		$this->M_inventario->borrarProducto($id_inventario);
		if(! $this->db->affected_rows() == 0 ){
			redirect(base_url()."index.php/ainventario");
		}
	}


	public function updateProducto($id_inventario)

	{
		$Nombre = $this->input->post("Nombre");
		$cantidadProducto = $this->input->post("cantidadProducto");
		$PrecioUnitario = $this->input->post("PrecioUnitario");
		
		$datos = array(
			"Nombre"=>$Nombre,
			"cantidadProducto"=>$cantidadProducto,
			"PrecioUnitario"=>$PrecioUnitario
		);
	
	
			$this->M_inventario->updateProducto($datos,$id_inventario);
			$this->session->set_flashdata('succes','Se hizo la corrección correctamente');
			redirect(base_url()."index.php/ainventario");
		}




}