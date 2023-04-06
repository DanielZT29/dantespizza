<?php 
    class M_inventario extends CI_Model{

        public function getinventario(){
            return $this->db->select('*')
                            ->from('inventario')
                            ->get()
                            ->result();
        }

        public function updateProducto($datos, $id_inventario){
            $this->db->where('id_inventario', $id_inventario);
            $this->db->update('inventario', $datos);    
           
        }
    

        public function guardarProducto($datos){
            $this->db->insert("inventario",$datos);
        }

        public function borrarProducto($id_inventario){
            return $this->db->where('id_inventario',$id_inventario)
                            ->delete('inventario');             
        }

    
}