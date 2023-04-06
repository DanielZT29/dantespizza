<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asucursales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sucursalesmodel");

	}

	public function index()
	{
		$data = array("data"=>$this->Sucursalesmodel->getSucursales());
		
		$this->load->view('admin/sucursales', $data);
	}
	

}
