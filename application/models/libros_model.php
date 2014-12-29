<?php
class libros_model extends CI_Model {
    function __construct(){
        parent::__construct(); }

    function añadir($titulo, $autor, $editorial,$sinopsis)
    {
        $data=array(

            'titulo' => $titulo,
            'autor' => $autor,
            'editorial' => $editorial,
            'sinopsis' => $sinopsis

        );
        $this->db->insert('Libros',$data);
    }
    function verTodo(){
        $query=$this->db->get('Libros');
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
     function traer_pagina($pagina,$x){//x es el numero de entradas que vamos a traer
        $this->db->order_by("id", "DESC");
        $query=$this->db->get('Libros');
        $cont=0;
         if($query->num_rows()>0){
            foreach ($query->result() as $n=>$row){
                if($n+1<=($pagina-1)*$x) continue;
                $cont++;
                $libros[$cont]=$row;
                if($cont==$x) return $libros;
            }
             return $libros;
         }
    }
     function numero_paginas($x){//x es el numero de entradas por pagina, igual que en traer_pagina
        $query=$this->db->get('Libros');
        return ceil($query->num_rows()/$x);
    }
     function eliminar($id){
        $this->db->delete('Libros', array('id' => $id));
    }
    function editar($titulo,$autor,$editorial,$sinopsis,$id){
        $data = array(
               'titulo' => $titulo,
               'autor' => $autor,
               'editorial' => $editorial,
                'sinopsis' => $sinopsis
            );


        $this->db->where('id', $id);
        $this->db->update('Libros', $data);
    }
    function obtener($id){
        $query=$this->db->get_where('Libros', array('id' => $id));
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
}
?>
