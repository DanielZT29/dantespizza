<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asucursales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sucursalesmodel");
		$this->load->library("session");


	}

	public function index()
	{
		if($this->validar()){
			if($this->session->userdata('Rol')== 1){
				$data = array("data"=>$this->Sucursalesmodel->getSucursales());
				$this->load->view('admin/sucursales', $data);	
			}
			else{
				$data = array("data"=>$this->Sucursalesmodel->getSucursales());
				$this->load->view('sucursales', $data);	
			}
		}
		else{
			$data = array("data"=>$this->Sucursalesmodel->getSucursales());
			$this->load->view("sucursales", $data);
		}
	}
	public function validar(){
		if($this->session->userdata('Rol')!=null)
			return true;
		else
			return false;
	}	
}
