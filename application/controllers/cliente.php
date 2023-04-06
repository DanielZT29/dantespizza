<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		

	}
	public function index()
	{
		$data = array("data"=>$this->M_login->getActor());
		$this->load->view('indexcliente', $data);
		$this->load->helper('url');
	}
}