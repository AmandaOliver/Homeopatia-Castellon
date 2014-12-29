<?php
class menu_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('date');
         $this->load->model(array('blog_model','noticias_model','libros_model'));

    }
    function index(){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
    }



    //blog

     function insertar_entrada(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $data["message"]="";
        $this->load->view('insertar_entrada_view',$data);

    }


    function editar_eliminar_entrada(){
         $elementos_pagina=10;
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }

        $entradas=$this->blog_model->verTodo();
        $data=array(
            "tipo" => "blog",
            "paginas_blog" => $this->blog_model->numero_paginas($elementos_pagina),
            "entradas" => $this->blog_model->traer_pagina(1,$elementos_pagina),
            "pb" => 1,
            "message" => ""
        );
        $this->load->view('editar_eliminar_entrada_view',$data);
    }

    function pagina_blog($pag_blog){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
         $elementos_pagina=10;
        $data=array(
            "paginas_blog" => $this->blog_model->numero_paginas($elementos_pagina),
            "entradas" => $this->blog_model->traer_pagina($pag_blog,$elementos_pagina),
            "pb" => $pag_blog,
            "message" => ""
        );
        $this->load->view('editar_eliminar_entrada_view',$data);
    }
     function editar_entrada($i){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $entrada=$this->blog_model->obtener($i);
        foreach( $entrada->result() as $row){
        $data=array(
            "message"=>"",
            "id"=>$row->id,
            "titulo"=>$row->titulo,
            "cuerpo"=>$row->cuerpo
        );
        $this->load->view('editar_entrada_view',$data);}
    }

    //noticias
     function insertar_noticia(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $data["message"]="";
        $this->load->view('insertar_noticia_view',$data);

    }

     function editar_eliminar_noticia(){
         $elementos_pagina=10;
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }

        $noticias=$this->noticias_model->verTodo();
        $data=array(
            "paginas_noticias" => $this->noticias_model->numero_paginas($elementos_pagina),
            "noticias" => $this->noticias_model->traer_pagina(1,$elementos_pagina),
            "pn" => 1,
            "message" => ""
        );
        $this->load->view('editar_eliminar_noticia_view',$data);
    }

    function pagina_noticias($pag_noticias){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $elementos_pagina=10;
        $data=array(
            "paginas_noticias" => $this->noticias_model->numero_paginas($elementos_pagina),
            "noticias" => $this->noticias_model->traer_pagina($pag_noticias,$elementos_pagina),
            "pn" => $pag_noticias,
            "message" => ""
        );
        $this->load->view('editar_eliminar_noticia_view',$data);
    }
    function editar_noticia($i){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $noticia=$this->noticias_model->obtener($i);
        foreach( $noticia->result() as $row){
        $data=array(
            "message"=>"",
            "id"=>$row->id,
            "titular"=>$row->titular,
            "resumen"=>$row->resumen,
            "enlace"=>$row->enlace
        );
        $this->load->view('editar_noticia_view',$data);}
    }

    //libros
     function insertar_libro(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $data["message"]="";
        $this->load->view('insertar_libro_view',$data);

    }

     function editar_eliminar_libro(){
         $elementos_pagina=10;
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }

        $libros=$this->libros_model->verTodo();
        $data=array(
            "paginas_libros" => $this->libros_model->numero_paginas($elementos_pagina),
            "libros" => $this->libros_model->traer_pagina(1,$elementos_pagina),
            "pl" => 1,
            "message" => ""
        );
        $this->load->view('editar_eliminar_libro_view',$data);
    }

    function pagina_libros($pag_libros){
         if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $elementos_pagina=10;
        $data=array(
            "paginas_libros" => $this->libros_model->numero_paginas($elementos_pagina),
            "libros" => $this->libros_model->traer_pagina($pag_libros,$elementos_pagina),
            "pl" => $pag_libros,
            "message" => ""
        );
        $this->load->view('editar_eliminar_libro_view',$data);
    }
    function editar_libro($i){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(base_url().'Login_controller');
        }
        $libro=$this->libros_model->obtener($i);
        foreach( $libro->result() as $row){
        $data=array(
            "message"=>"",
            "id"=>$row->id,
            "titulo"=>$row->titulo,
            "autor"=>$row->autor,
            "editorial"=>$row->editorial,
            "sinopsis"=>$row->sinopsis
        );
        $this->load->view('editar_libro_view',$data);}
    }
}
?>
