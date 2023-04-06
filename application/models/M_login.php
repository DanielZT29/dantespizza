<?php
class M_login extends CI_Model {

	public function usuario($user,$pass){
	return $this->db->select('*')
                    ->from('usuario')
                    ->where('correo',$user)
                    ->where('contraseña', $pass)
                    
                    ->get()
                    ->row();

    }
    public function tipousuario($tipo){
        return $this->db->select('*')
                        ->from('usuario')
                        ->where('fk_tipo_usuario', $tipo)
                        ->get()
                        ->row();
    
        }
        public function getActor(){
            $this->db->select("*");
            $this->db->from("usuario");
           
            $results=$this->db->get();
            return $results->result();
        
    }

}
?>