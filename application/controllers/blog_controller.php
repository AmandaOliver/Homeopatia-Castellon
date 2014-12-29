<?php
class Blog_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        $this->load->helper('date');
        $this->load->model('blog_model');
    }
    function index(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
    }
    function insertar_entrada(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->form_validation->set_rules("titulo", "Titulo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("cuerpo", "Cuerpo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data["message"]="Se ha producido un error.";
            $this->load->view('insertar_entrada_view',$data);
        }else{
            $titulo = $this->input->post('titulo');
            $cuerpo = $this->input->post('cuerpo');
            $fecha=date("Y-m-d H:i:s");
            $this->blog_model->añadir($titulo,$cuerpo,$fecha);
            $data["message"]="<div class='alert alert-success'>La entrada del blog se ha guardado correctamente. ¡Gracias!</div>";
            $this->load->view('insertar_entrada_view',$data);
        }

    }

    function eliminar_entrada($id){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->blog_model->eliminar($id);
        redirect(base_url().'menu_controller/editar_eliminar_entrada');
    }

    function editar_entrada($id){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->form_validation->set_rules("titulo", "Titulo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("cuerpo", "Cuerpo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data=array(
                "message"=>"Se ha producido un error.",
                "id"=>"",
                "titulo"=>"",
                "cuerpo"=>""
            );
            $this->load->view('editar_entrada_view',$data);
        }else{
            $titulo = $this->input->post('titulo');
            $cuerpo = $this->input->post('cuerpo');
            $id = $this->input->post('id');
            $fecha=date("Y-m-d H:i:s");
            $this->blog_model->editar($titulo,$cuerpo,$fecha,$id);
            $data=array(
                "message"=>"<div class='alert alert-success'>La entrada del blog se ha editado correctamente. ¡Gracias!</div>",
                "id"=>"",
                "titulo"=>"",
                "cuerpo"=>""
            );
            $this->load->view('editar_entrada_view',$data);
        }
    }

}
?>
