<?php
class M_Tampil_blog extends CI_Model{


  function tampil_blog_home(){
    
    $this->db->where('status','2');
    $this->db->limit(6);
      $this->db->order_by('DATE(tgl_blog)','DESC');
    $hasil= $this->db->get('Blog');
    return $hasil->result();
  }

  function tampil_blog($config){

    $this->db->where('status','2');
    $this->db->limit(6);
      $this->db->order_by('DATE(tgl_blog)','DESC');
      $hasilquery=$this->db->get('Blog', $config['per_page'], $this->uri->segment(3));
      if ($hasilquery->num_rows() > 0) {
          foreach ($hasilquery->result() as $value) {
              $data[]=$value;
          }
          return $data;
      }

      }

  function tampil_pilih_blog($id,$tgl){

    $this->db->where('status','2');
          $this->db->limit(1);
          $this->db->order_by('DATE(tgl_blog)','DESC');
      		$this->db->where('id_blog', $id);
          $this->db->where('tgl_blog', $tgl);
      		return $this->db->get('Blog');
      	}


}
  ?>
