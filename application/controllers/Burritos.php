<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Burritos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productmodel");

	}

	public function index()
	{
		$data = array("data"=>$this->Productmodel->getProduct(3));
		
		$this->load->view('burritos', $data);
	}
	

}
