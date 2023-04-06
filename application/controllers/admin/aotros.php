<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aotros extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productmodel");

	}

	public function index()
	{
		$data = array("data"=>$this->Productmodel->getProduct5());
		
		$this->load->view('admin/otros', $data);
	}
	

}
