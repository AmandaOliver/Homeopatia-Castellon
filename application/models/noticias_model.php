<?php
class noticias_model extends CI_Model {
    function __construct(){
        parent::__construct(); }

    function añadir($titular, $resumen, $enlace, $fecha)
    {
        $data=array(
            'fecha' => $fecha,
            'titular' => $titular,
            'resumen' => $resumen,
            'enlace' => $enlace
        );
        $this->db->insert('Noticias',$data);
    }
    function verTodo(){
        $query=$this->db->get('Noticias');
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
     function traer_pagina($pagina,$x){//x es el numero de entradas que vamos a traer

        $this->db->order_by("id", "DESC");
        $query=$this->db->get('Noticias');
        $cont=0;
         if($query->num_rows()>0){
            foreach ($query->result() as $n=>$row){
                if($n+1<=($pagina-1)*$x) continue;
                $cont++;
                $noticias[$cont]=$row;
                if($cont==$x) return $noticias;
            }
             return $noticias;
         }
    }
    function numero_paginas($x){//x es el numero de entradas por pagina, igual que en traer_pagina
        $query=$this->db->get('Noticias');
        return ceil($query->num_rows()/$x);
    }
     function eliminar($id){
        $this->db->delete('Noticias', array('id' => $id));
    }
    function editar($titular,$enlace,$resumen,$fecha,$id){
        $data = array(
               'titular' => $titular,
               'enlace' => $enlace,
               'resumen' => $resumen,
               'fecha' => $fecha

            );

       // echo $id;
        $this->db->where('id', $id);
        $this->db->update('Noticias', $data);
    }
    function obtener($id){
        $query=$this->db->get_where('Noticias', array('id' => $id));
        if($query->num_rows()>0) return $query;
        else return FALSE;
    }
}
?>
