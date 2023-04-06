<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ahamburguesas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productmodel");

	}

	public function index()
	{
		$data = array("data"=>$this->Productmodel->getProduct2());
		
		$this->load->view('admin/hamburguesas', $data);
	}
	

}
