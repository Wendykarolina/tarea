<?php
class Reporte extends CI_Model /// nombre del modelo tan cual esta creado en el modelo
{

  function __construct()
  {
    parent::__construct();
  }
  function obtenerPresidentes(){
    $this->db->where('dignidad_cand','PRESIDENTES');
    $listadoCandidatos=$this->db->get("candidato");
    if ($listadoCandidatos->num_rows()>0){
      return $listadoCandidatos->result();
    }
    return false;
  }
  function obtenerNacionales(){
    $this->db->where('dignidad_cand','ASAMBLEISTAS_NACIONALES');
    $listadoCandidatos=$this->db->get("candidato");
    if ($listadoCandidatos->num_rows()>0){
      return $listadoCandidatos->result();
    }
    return false;
  }
  function obtenerProvinciales(){
    $this->db->where('dignidad_cand','ASAMBLEISTAS_PROVINCIALES');
    $listadoCandidatos=$this->db->get("candidato");
    if ($listadoCandidatos->num_rows()>0){
      return $listadoCandidatos->result();
    }
    return false;
  }
  // function obtenerDerechas(){
  //   $this->db->where('tipo_cand','DERECHA');
  //   $listadoCandidatos=$this->db->get("candidato");
  //   if ($listadoCandidatos->num_rows()>0){
  //     return $listadoCandidatos->result();
  //   }
  //   return false;
  // }
  // function obtenerIzquierdas(){
  //   $this->db->where('tipo_cand','IZQUIERDA');
  //   $listadoCandidatos=$this->db->get("candidato");
  //   if ($listadoCandidatos->num_rows()>0){
  //     return $listadoCandidatos->result();
  //   }
  //   return false;
  // }
}
 ?>
