<?php
class libros_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->library(array('session','form_validation'));
        $this->load->helper('date');
        $this->load->model('libros_model');
    }
    function index(){

    }
    function insertar_libro(){
        $this->form_validation->set_rules("titulo", "Titulo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("autor", "Autor", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("editorial", "Editorial", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("sinopsis", "Sinopsis", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data["message"]="Se ha producido un error.";
            $this->load->view('insertar_libro_view',$data);
        }else{
            $titulo = $this->input->post('titulo');
            $autor = $this->input->post('autor');
            $editorial = $this->input->post('editorial');
            $sinopsis = $this->input->post('sinopsis');
            $this->libros_model->añadir($titulo,$autor,$editorial,$sinopsis);
            $data["message"]="<div class='alert alert-success'>El libro se ha guardado correctamente. ¡Gracias¡</div>";
            $this->load->view('insertar_libro_view',$data);
        }

    }

    function eliminar_libro($id){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->libros_model->eliminar($id);
        redirect(base_url().'menu_controller/editar_eliminar_libro');
    }

    function editar_libro($id){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $this->form_validation->set_rules("titulo", "Titulo", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("autor", "Autor", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("editorial", "Editorial", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_rules("sinopsis", "Sinopsis", 'required|trim|min_length[3]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data=array(
                "message"=>"Se ha producido un error.",
                "id"=>"",
                "titulo"=>"",
                "autor"=>"",
                "editorial"=>"",
                "sinopsis"=>""
            );
            $this->load->view('editar_libro_view',$data);
        }else{
            $titulo = $this->input->post('titulo');
            $autor = $this->input->post('autor');
            $editorial = $this->input->post('editorial');
            $sinopsis = $this->input->post('sinopsis');
            $id = $this->input->post('id');
            $this->libros_model->editar($titulo,$autor,$editorial,$sinopsis,$id);
            $data=array(
                "message"=>"<div class='alert alert-success'>La libro se ha editado correctamente. ¡Gracias¡</div>",
                "id"=>"",
                "titulo"=>"",
                "autor"=>"",
                "editorial"=>"",
                "sinopsis"=>""
            );
            $this->load->view('editar_libro_view',$data);
        }
    }

}
?>
