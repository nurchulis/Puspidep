<?php
class M_Tampil_about extends CI_Model{

  function tampil_about(){
    $hasil= $this->db->get('About');
    return $hasil->result();
  }
  function tampil_slider(){
  	return $this->db->get('Slider')->result();
  }
}
  ?>
