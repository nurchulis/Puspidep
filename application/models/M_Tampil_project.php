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
function tampil_pilih_project($id,$tgl){
    $this->db->limit(1);
    $this->db->order_by('DATE(tgl_project)','DESC');
		$this->db->where('id_project_post', $id);
    $this->db->where('tgl_project', $tgl);
		return $this->db->get('Project_post');
	}
  function tampil_project_1(){
    
    $this->db->where('status','2');
    $this->db->limit(6);
      $this->db->order_by('DATE(tgl_project)','DESC');
    $hasil= $this->db->get('Project_post');
    return $hasil->result();
  }

function tampil_project_post($config){
  $this->db->limit(6);

    $this->db->where('status','2');
    $this->db->order_by('DATE(tgl_project)','DESC');
    $hasilquery=$this->db->get('Project_post', $config['per_page'], $this->uri->segment(3));
    if ($hasilquery->num_rows() > 0) {
        foreach ($hasilquery->result() as $value) {
            $data[]=$value;
        }
        return $data;
    }
}


}

?>
