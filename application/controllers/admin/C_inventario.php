<?php

class C_inventario extends CI_Controller{
	public function __construct() {
		parent :: __construct();
		$this->load->model('M_inventario');
		$this->load->helper('url');
		
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

	public function updateInventario()
	{
		
		if($this->input->post()){
			/*$id_inventario = $this->input->post('id_inventario');
			$provedores = $this->input->post("provedores");
			$PrecioUnitario = $this->input->post('PrecioUnitario');
			$Nombre = $this->input->post("Nombre");
			$cantidadProducto = $this->input->post('cantidadProducto');*/
			$this->M_inventario->updateProducto($this->input->post(), $this->input->post('id_inventario'));
			$this->inventario();
			//print_r($this->input->post());
		}
	}
	




}