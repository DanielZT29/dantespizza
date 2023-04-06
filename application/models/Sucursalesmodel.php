<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sucursalesmodel extends CI_Model {

	
    public function getSucursales(){
        $this->db->select("*");
        $this->db->from("sucursales");
        $results=$this->db->get();
        return $results->result();
    
}
public function save($data){
    $this->db->query("ALTER TABLE sucursales AUTO_INCREMENT 1");
    $this->db->insert("sucursales",$data);

}



}