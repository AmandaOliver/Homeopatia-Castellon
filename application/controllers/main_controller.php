<?php
class Main_controller extends CI_Controller{

    function __construct() {
        parent::__construct();
          $this->load->model(array('blog_model','noticias_model','libros_model'));

    }
    function index() {
        $elementos_pagina=4;
        $data=array(
            "elementos_pagina" => $elementos_pagina,
            "paginas_blog" => $this->blog_model->numero_paginas($elementos_pagina),
            "entradas" => $this->blog_model->traer_pagina(1,$elementos_pagina),
            "pb" => 1,
            "paginas_noticias" => $this->noticias_model->numero_paginas($elementos_pagina),
            "noticias" => $this->noticias_model->traer_pagina(1,$elementos_pagina),
            "pn"=>1,
            "paginas_libros" => $this->libros_model->numero_paginas($elementos_pagina),
            "libros" => $this->libros_model->traer_pagina(1,$elementos_pagina),
            "pl"=>1,
            "message" => ""
        );
        $this->load->view('main_view',$data);

    }
    function send_email()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nombre", "Nombre", "required|xss_clean");
        $this->form_validation->set_rules("correo", "Correo Electrónico", "required|valid_email|xss_clean");
        $this->form_validation->set_rules("mensaje", "Mensaje", "required|xss_clean");
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        if($this->form_validation->run() == FALSE){
            $data["message"]="";
            $this->load->view('main_view',$data);
        }else{
            $data["message"]="<div class='alert alert-success'>El correo electrónico se ha enviado correctamente. ¡Gracias!</div>";
            $this->load->view('main_view',$data);
            $this->load->library('email');
            $this->email->from(set_value("correo"), set_value("nombre"));
            $this->email->to("maiteinglada@gmail.com");
            $this->email->subject("Mensaje de la maravillosísima página web Homeopatía Castellón");
            $this->email->message(set_value("mensaje"));
            $this->email->send();
        }
    }
    function paginas($pag_blog, $pag_noticias, $pag_libros){
        $elementos_pagina=4;
        $data=array(
            "elementos_pagina" => $elementos_pagina,
            "paginas_blog" => $this->blog_model->numero_paginas($elementos_pagina),
            "entradas" => $this->blog_model->traer_pagina($pag_blog,$elementos_pagina),
            "pb" => $pag_blog,
            "paginas_noticias" => $this->noticias_model->numero_paginas($elementos_pagina),
            "noticias" => $this->noticias_model->traer_pagina($pag_noticias,$elementos_pagina),
            "pn" =>$pag_noticias,
             "paginas_libros" => $this->libros_model->numero_paginas($elementos_pagina),
            "libros" => $this->libros_model->traer_pagina($pag_libros,$elementos_pagina),
            "pl" =>$pag_libros,
            "message" => ""
        );
        $this->load->view('main_view',$data);
    }
}
?>
