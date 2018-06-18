<?php
class M_Tampil_project extends CI_Model{


function tampil_project(){
  $hasil= $this->db->get('Project');
  return $hasil->result();
}
function tampil_project_slider(){
  $hasil=$this->db->get('Slider_project');
  return $hasil->result();
}


}

?>
