<?php
class Noticias_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        $this->load->helper('date');
        $this->load->model('noticias_model');
    }
    function index(){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
    }
    function insertar_noticia(){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->form_validation->set_rules("titular", "Titular", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("resumen", "Resumen", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("enlace", "Enlace", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data["message"]="Se ha producido un error.";
            $this->load->view('insertar_noticia_view',$data);
        }else{
            $titular = $this->input->post('titular');
            $resumen = $this->input->post('resumen');
            $enlace = $this->input->post('enlace');
            $fecha=date("Y-m-d H:i:s");
            $this->noticias_model->añadir($titular,$resumen,$enlace,$fecha);
            $data["message"]="<div class='alert alert-success'>La noticia se ha guardado correctamente. ¡Gracias¡</div>";
            $this->load->view('insertar_noticia_view',$data);
        }

    }

     function eliminar_noticia($id){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->noticias_model->eliminar($id);
        redirect(base_url().'menu_controller/editar_eliminar_noticia');
    }

    function editar_noticia($id){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->form_validation->set_rules("titular", "Titular", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("resumen", "Resumen", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("enlace", "Enlace", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data=array(
                "message"=>"Se ha producido un error.",
                "id"=>"",
                "titular"=>"",
                "resumen"=>"",
                "enlace"=>""
            );
            $this->load->view('editar_noticia_view',$data);
        }else{
            $titular = $this->input->post('titular');
            $resumen = $this->input->post('resumen');
            $enlace = $this->input->post('enlace');
            $id = $this->input->post('id');
            $fecha=date("Y-m-d H:i:s");
            $this->noticias_model->editar($titular,$enlace,$resumen,$fecha,$id);
            $data=array(
                "message"=>"<div class='alert alert-success'>La noticia se ha editado correctamente. ¡Gracias¡</div>",
                "id"=>"",
                "titular"=>"",
                "resumen"=>"",
                "enlace"=>""
            );
            $this->load->view('editar_noticia_view',$data);
        }
    }

}
?>
