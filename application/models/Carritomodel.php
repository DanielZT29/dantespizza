<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Carritomodel extends CI_Model {



    public function getCarrito(){
        $this->db->select("*");
        $this->db->from("carrito");
        $results=$this->db->get();
        return $results->result();
    
}

	public function save($data){
        $this->db->query("ALTER TABLE carrito AUTO_INCREMENT 1");
        $this->db->insert("carrito",$data);

    }

    public function borrarCarrito($id_carrito){
        return $this->db->where('id_carrito',$id_carrito)
                        ->delete('carrito');             
    }
    


}