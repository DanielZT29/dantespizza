<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orden extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model("Productmodel");
        
	}

	public function index($id_productos)
	{
		$data=$this->Productmodel->getOrden($id_productos);
		
		
		$this->load->view('orden',$data);
	}

	public function update($id_productos)

	{
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		
		$data = array(
			"first_name"=>$firstname,
			"last_name"=>$lastname,
			"last_update"=>date("y-m-d h:m:s")
		);
	
	
			$this->actormodel->update($data,$id_productos);
			$this->session->set_flashdata('succes','Se hizo la corrección correctamente');
			redirect(base_url()."index.php/actores");
		}
		

		
}
	