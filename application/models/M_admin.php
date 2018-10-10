<?php
class M_admin extends CI_Model{

  function tampil_project(){

          $this->db->order_by('DATE(tgl_project)','DESC');
    return $this->db->get('project_post')->result();
  }
  function tampil_blog(){

          $this->db->order_by('DATE(tgl_blog)','DESC');
    $hasil= $this->db->get('blog');
    return $hasil->result();
  }
  function tampil_portofolio(){

          $this->db->order_by('DATE(tgl_portofolio)','DESC');
  	$hasil= $this->db->get('portofolio');
  	return $hasil->result();
  }
  function ambil_edit_project($id){
		$this->db->where('id_project_post',$id);
		return $this->db->get('project_post')->result();
	}
	function ambil_portofolio($id){
		$this->db->where('id_portofolio',$id);

		return $this->db->get('portofolio')->result();
	}
	function ambil_blog($id){
		$this->db->where('id_blog',$id);
		return $this->db->get('blog')->result();

	}
	function count_pro(){
		return $this->db->count_all_results('project_post');
	}
	function count_blog(){
		return $this->db->count_all_results('blog');
	}
	function count_por(){
		return $this->db->count_all_results('portofolio');
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function update_slider($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_about($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function ambil_log(){
		$this->db->limit('6');
		$this->db->order_by('DATE(tgl)','DESC');
		return $this->db->get('log')->result();
	}
	function ambil_log2(){
		$this->db->order_by('DATE(tgl)','DESC');
		return $this->db->get('log')->result();
	}
	function ambil_admin(){
		return $this->db->get('admin')->result();
	}
	function update_admin($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


}
  ?>
