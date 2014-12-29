<?php
class Administrador_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    function index(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->load->view('administrador_view');
    }

}
?>
