<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Productmodel");

	}

	public function index()
	{
		$data = array("data"=>$this->Productmodel->getProduct());
		
		$this->load->view('menu', $data);
	}
	

}
