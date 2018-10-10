<?php
class M_kirim extends CI_Model{

  function tampil_about(){
    $hasil= $this->db->get('about');
    return $hasil->result();
  }
 function update_project($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_portofolio($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	} function update_blog($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	} 	
}
  ?>
