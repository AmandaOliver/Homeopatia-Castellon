<?php
class blog_model extends CI_Model {
    function __construct(){
        parent::__construct(); }

    function añadir($titulo, $cuerpo, $fecha)
    {
        $data=array(
            'fecha' => $fecha,
            'titulo' => $titulo,
            'cuerpo' => $cuerpo
        );
        $this->db->insert('Blog',$data);
    }
    function verTodo(){
        $query=$this->db->get('Blog');
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
    function traer_pagina($pagina,$x){ //x es el numero de entradas que vamos a traer
        $this->db->order_by("id", "DESC");
        $query=$this->db->get('Blog');
        $cont=0;
         if($query->num_rows()>0){
            foreach ($query->result() as $n=>$row){
                if($n+1<=($pagina-1)*$x) continue;
                $cont++;

                $entradas[$cont]=$row;
                if($cont==$x) return $entradas;
            }
             return $entradas;
         }
    }
    function numero_paginas($x){ //x es el numero de entradas por página, debe ser igual que en traer_pagina()
        $query=$this->db->get('Blog');
        return ceil($query->num_rows()/$x);
    }
    function eliminar($id){
        $this->db->delete('Blog', array('id' => $id));
    }
    function editar($titulo,$cuerpo,$fecha,$id){
        $data = array(
               'titulo' => $titulo,
               'cuerpo' => $cuerpo,
               'fecha' => $fecha
            );

       // echo $id;
        $this->db->where('id', $id);
        $this->db->update('Blog', $data);
    }
    function obtener($id){
        $query=$this->db->get_where('Blog', array('id' => $id));
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
}
?>
