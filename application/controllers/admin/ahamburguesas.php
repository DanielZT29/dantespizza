<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ahamburguesas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productmodel");
		$this->load->library("session");
	}

	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$data = array("data"=>$this->Productmodel->getProduct(2));
				$this->load->view('admin/hamburguesas', $data);	
			}
			else{
				$data = array("data"=>$this->Productmodel->getProduct(2));
				$this->load->view('hamburguesas', $data);	
			}
		}
		else{
			$data = array("data"=>$this->Productmodel->getProduct(2));
			$this->load->view("hamburguesas", $data);
		}
	}

	public function validar(){
		if($this->session->userdata('Rol')!=null)
			return true;
		else
			return false;
	}


}
