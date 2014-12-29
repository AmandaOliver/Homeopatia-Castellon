<?php
class login_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function login_user($username,$password)
    {
        $this->db->where('usuario',$username);
        $this->db->where('clave',$password);
        $query = $this->db->get('login');
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos.');
            redirect(base_url().'Login_controller','refresh');
        }
    }
}
?>
