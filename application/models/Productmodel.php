<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productmodel extends CI_Model {

	
    public function getProduct(){
        $this->db->select("*");
        $this->db->from("productos");
        $this->db->where("fk_categoria=1");
        $results=$this->db->get();
        return $results->result();
       
}
public function getProduct2(){
    $this->db->select("*");
    $this->db->from("productos");
    $this->db->where("fk_categoria=2");
    $results=$this->db->get();
    return $results->result();
   
}
public function getProduct3(){
    $this->db->select("*");
    $this->db->from("productos");
    $this->db->where("fk_categoria=3");
    $results=$this->db->get();
    return $results->result();
   
}
public function getProduct4(){
    $this->db->select("*");
    $this->db->from("productos");
    $this->db->where("fk_categoria=4");
    $results=$this->db->get();
    return $results->result();
   
}
public function getProduct5(){
    $this->db->select("*");
    $this->db->from("productos");
    $this->db->where("fk_categoria=5");
    $results=$this->db->get();
    return $results->result();
   
}
public function getOrden($id_productos){
    $this->db->select("*");
    $this->db->from("productos");
    $this->db->where("id_productos",$id_productos);
    $results=$this->db->get();
    return $results->row();

}
public function save($data){
    $this->db->query("ALTER TABLE productos AUTO_INCREMENT 1");
    $this->db->insert("productos",$data);

}



}