<?php
  class Candidato extends CI_Model
  {
    function __construct()
    {
    		parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("candidato",$datos);
    }
    public function obtenerTodo(){
      $candidatos=$this->db->get('candidato');
      if ($candidatos->num_rows()>0) {
        return $candidatos->result();
      } else {
        return false;
      }
    }
    public function eliminarPorId($id){
      $this->db->where("id_cand",$id);
      return $this->db->delete('candidato');
    }
    function actualizar($id_cand,$datos){
      $this->db->where("id_cand",$id_cand);
      return $this->db->update('candidato',$datos);
  }
  }//no cerrar
