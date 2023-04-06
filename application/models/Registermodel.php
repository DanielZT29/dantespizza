<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registermodel extends CI_Model {

	public function save($data){
        $this->db->query("ALTER TABLE usuario AUTO_INCREMENT 1");
        $this->db->insert("usuario",$data);

    }


}