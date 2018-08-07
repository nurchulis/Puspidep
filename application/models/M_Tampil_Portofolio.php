<?php
class M_Tampil_portofolio extends CI_Model{



  function tampil_portofolio($config){

    $this->db->where('status','2');
    $this->db->limit(6);
      $this->db->order_by('DATE(tgl_portofolio)','DESC');
      $hasilquery=$this->db->get('Portofolio', $config['per_page'], $this->uri->segment(3));
      if ($hasilquery->num_rows() > 0) {
          foreach ($hasilquery->result() as $value) {
              $data[]=$value;
          }
          return $data;
      }
      }
    function tampil_portofolio_home(){

    $this->db->where('status','2');
      $this->db->limit(4);
        $this->db->order_by('DATE(tgl_portofolio)','DESC');
      $hasil= $this->db->get('Portofolio');
      return $hasil->result();
    }

    function tampil_pilih_portofolio($id,$tgl){
      
    $this->db->where('status','2');
            $this->db->limit(1);
            $this->db->order_by('DATE(tgl_portofolio)','DESC');
        		$this->db->where('id_portofolio', $id);
            $this->db->where('tgl_portofolio', $tgl);
        		return $this->db->get('Portofolio');
        	}

}
  ?>
