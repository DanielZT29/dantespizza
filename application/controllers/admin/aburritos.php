<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class aburritos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Productmodel");
		$this->load->library("session");
	}
	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$data = array("data"=>$this->Productmodel->getProduct(3));
				$this->load->view('admin/burritos', $data);	
			}
			else{
				$data = array("data"=>$this->Productmodel->getProduct(3));
				$this->load->view('burritos', $data);	
			}
		}
		else{
			$data = array("data"=>$this->Productmodel->getProduct(3));
			$this->load->view("burritos", $data);
		}
	}

	public function validar(){
		if($this->session->userdata('Rol')!=null)
			return true;
		else
			return false;
	}
	

}