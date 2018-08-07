<?php
class Kirim extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_kirim');
        $this->load->library('upload');
        
        $this->load->helper(array('form', 'url'));
    }
    public function post_project(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){
}else{
	$gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
 	$this->load->library('image_lib', $config);
    $this->image_lib->resize();

 	$conf['image_library'] = 'gd2';
 	$config['quality']= '70';
 	$conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
 	$conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
 	$conf['create_thumb'] = TRUE;
 	$conf['maintain_ratio'] = FALSE;
 	$conf['width'] = 300;
 	$conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

echo "asa";
    	$data = array(
						'id_project_post' =>'',
						'judul_project' =>  $this->input->post('judul_project'),
						'tgl_project' =>date("Y-m-d"),
						'isi_project' => $this->input->post('isi'),
						
						'deskripsi' => $this->input->post('deskripsi'),
						'status'=>$this->input->post('status'),
						'gambar_project' =>$data["raw_name"].$data['file_ext']
			);
                  print_r($data);
    $this->db->insert('Project_post',$data);
    redirect('HalamanAdmin/Posting_Project');
}
}
     public function edit_project(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){

    $data = array(
                        'id_project_post' =>$this->input->post('id_project'),
                        'judul_project' =>  $this->input->post('judul_project'),
                        'tgl_project' =>date("Y-m-d"),
                        'isi_project' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'gambar_project' =>$this->input->post('gambar_lama')
            );
    echo print_r($data);
    $where = array('id_project_post' =>$this->input->post('id_project'));   
    $this->M_kirim->update_project($where,$data,'Project_post');
      redirect('HalamanAdmin/Posting_home');

}else{

    $path_to_file = './Assets/images/Kiriman/'.$this->input->post('gambar_lama');
                unlink($path_to_file);
    $path_to_file2 = './Assets/images/Kiriman/thumb/'.$this->input->post('gambar_lama');
                unlink($path_to_file2);            

    $gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    $conf['image_library'] = 'gd2';
    $config['quality']= '70';
    $conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
    $conf['create_thumb'] = TRUE;
    $conf['maintain_ratio'] = FALSE;
    $conf['width'] = 300;
    $conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

        $data = array(
                        'id_project_post' =>$this->input->post('id_project'),
                        'judul_project' =>  $this->input->post('judul_project'),
                        'tgl_project' =>date("Y-m-d"),
                        'isi_project' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'gambar_project' =>$data["raw_name"].$data['file_ext']
            );
    $where = array('id_project_post' =>$this->input->post('id_project'));   
    $this->M_kirim->update_project($where,$data,'Project_post');
   redirect('HalamanAdmin/Posting_home');
}
}   

    public function post_portofolio(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){
}else{
    $gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    $conf['image_library'] = 'gd2';
    $config['quality']= '70';
    $conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
    $conf['create_thumb'] = TRUE;
    $conf['maintain_ratio'] = FALSE;
    $conf['width'] = 300;
    $conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

echo "asa";
        $data = array(
                        'id_portofolio' =>'',
                        'Judul_portofolio' =>  $this->input->post('judul_portofolio'),
                        'tgl_portofolio' =>date("Y-m-d"),
                        'isi_portofolio' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'Gambar_portofolio' =>$data["raw_name"].$data['file_ext']
            );
                  print_r($data);
    $this->db->insert('Portofolio',$data);
    redirect('HalamanAdmin/Posting_Project');
}
}
     public function edit_portofolio(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){

    $data = array(
                        'id_portofolio' =>$this->input->post('id_portofolio'),
                        'Judul_portofolio' =>  $this->input->post('judul_portofolio'),
                        'tgl_portofolio' =>date("Y-m-d"),
                        'isi_portofolio' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'Gambar_portofolio' =>$this->input->post('gambar_lama')
            );
    echo print_r($data);
    $where = array('id_portofolio' =>$this->input->post('id_portofolio'));   
    $this->M_kirim->update_project($where,$data,'Portofolio');
     redirect('HalamanAdmin/Posting_home');

}else{

    $path_to_file = './Assets/images/Kiriman/'.$this->input->post('gambar_lama');
                unlink($path_to_file);
    $path_to_file2 = './Assets/images/Kiriman/thumb/'.$this->input->post('gambar_lama');
                unlink($path_to_file2);            

    $gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    $conf['image_library'] = 'gd2';
    $config['quality']= '70';
    $conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
    $conf['create_thumb'] = TRUE;
    $conf['maintain_ratio'] = FALSE;
    $conf['width'] = 300;
    $conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

         $data = array(
                        'id_portofolio' =>$this->input->post('id_portofolio'),
                        'Judul_portofolio' =>  $this->input->post('judul_portofolio'),
                        'tgl_portofolio' =>date("Y-m-d"),
                        'isi_portofolio' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'Gambar_portofolio' =>$data["raw_name"].$data['file_ext']
            );
    $where = array('id_portofolio' =>$this->input->post('id_portofolio'));   
    $this->M_kirim->update_portofolio($where,$data,'Portofolio');
   redirect('HalamanAdmin/Posting_home');
}
}
      public function post_blog(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){
}else{
    $gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    $conf['image_library'] = 'gd2';
    $config['quality']= '70';
    $conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
    $conf['create_thumb'] = TRUE;
    $conf['maintain_ratio'] = FALSE;
    $conf['width'] = 300;
    $conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

echo "asa";
        $data = array(
                        'id_blog' =>'',
                        'judul_blog' =>  $this->input->post('judul_blog'),
                        'tgl_blog' =>date("Y-m-d"),
                        'isi_blog' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'gambar_blog' =>$data["raw_name"].$data['file_ext']
            );
                  print_r($data);
    $this->db->insert('Blog',$data);
    redirect('HalamanAdmin/Posting_home');
}
} 
    public function edit_blog(){
        $config['upload_path'] = './Assets/images/Kiriman';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
if(!$this->upload->do_upload('gambar_kiriman')){

      $data = array(
                        'id_blog' =>$this->input->post('id_blog'),
                        'judul_blog' =>  $this->input->post('judul_blog'),
                        'tgl_blog' =>date("Y-m-d"),
                        'isi_blog' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'gambar_blog' =>$this->input->post('gambar_lama')
            );
    echo print_r($data);
    $where = array('id_blog' =>$this->input->post('id_blog'));   
    $this->M_kirim->update_blog($where,$data,'Blog');
     redirect('HalamanAdmin/Posting_home');

}else{

    $path_to_file = './Assets/images/Kiriman/'.$this->input->post('gambar_lama');
                unlink($path_to_file);
    $path_to_file2 = './Assets/images/Kiriman/thumb/'.$this->input->post('gambar_lama');
                unlink($path_to_file2);            

    $gbr = $this->upload->data();
    $data = $this->upload->data();
    $config['image_library'] = 'gd2';
    $config['quality']= '70';
    $config['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 640;
    $config['height']       = 480;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    $conf['image_library'] = 'gd2';
    $config['quality']= '70';
    $conf['source_image'] = './Assets/images/Kiriman/'.$gbr['file_name'];
    $conf['new_image'] = './Assets/images/Kiriman/thumb/'.$gbr['file_name'];
    $conf['create_thumb'] = TRUE;
    $conf['maintain_ratio'] = FALSE;
    $conf['width'] = 300;
    $conf['height'] = 200;

 $this->load->library('image_lib', $conf);
 $this->image_lib->initialize($conf);
 $this->image_lib->resize();

       $data = array(
                        'id_blog' =>$this->input->post('id_blog'),
                        'judul_blog' =>  $this->input->post('judul_blog'),
                        'tgl_blog' =>date("Y-m-d"),
                        'isi_blog' => $this->input->post('isi'),
                        
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status'=>$this->input->post('status'),
                        'gambar_blog' =>$data["raw_name"].$data['file_ext']
            );
    $where = array('id_blog' =>$this->input->post('id_blog'));   
    $this->M_kirim->update_blog($where,$data,'Blog');
   redirect('HalamanAdmin/Posting_home');
}
}  
    public function delete_project($id){
        $fact=$this->db->query('select * from Project_post where id_project_post="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->gambar_project;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->gambar_project;
                unlink($path_to_file2);   


             $this->db->delete('Project_post', array('id_project_post'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }
     public function delete_blog($id){
        $fact=$this->db->query('select * from Blog where id_blog="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->gambar_blog;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->gambar_blog;
                unlink($path_to_file2);   


             $this->db->delete('Blog', array('id_blog'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }
      public function delete_por($id){
        $fact=$this->db->query('select * from Portofolio where id_portofolio="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->Gambar_portofolio;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->Gambar_portofolio;
                unlink($path_to_file2);   


             $this->db->delete('Portofolio', array('id_portofolio'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }

    public function edit_slider(){

         


                $config['upload_path']          = './Assets/images/Kiriman/Slider';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['overwrite'] = true;
                $config['encrypt_name']= true;
                $this->load->library('upload', $config);
                echo "sasjao".$this->input->post('gambar_slider');
                if ($this->upload->do_upload('gambar_slider'))
                {
                

                        $ambil = array('upload_data' => $this->upload->data());
                        $this->load->model('M_admin');
                        $data = array(
                        'id_slider' =>$this->input->post('id_slider'),
                        'gambar_slider' => $this->input->post('slider_lama'),
                        'link' => $this->input->post('link'),
                        'judul'   => $this->input->post('judul'),
                        'sub_content'   => $this->input->post('caption'),

                    );
                        
                        $where = array(
                        'id_slider' =>$this->input->post('id_slider'));           
                        $this->M_admin->update_slider($where,$data,'Slider');
                        //redirect('admin/slider');
                        print_r($data);
                    }
                else{       

                $path_to_file = './Assets/images/Kiriman/Slider/'.$this->input->post('slider_lama');
                unlink($path_to_file);


                $this->load->library('upload');
                $this->load->library('image_lib');
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './Assets/images/Kiriman/Slider/'.$gbr['file_name'];
                $config['new_image'] = './Assets/images/Kiriman/Slider/'.$gbr['file_name'];
                $config['quality']= '70';
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = AUTO;
                $config['height']       = 450;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                     $ambil = array('upload_data' => $this->upload->data());
            $this->load->model('M_admin');
              $data = array(
                        'id_slider' =>$this->input->post('id_slider'),
                        'gambar_slider' =>$this->upload->data('file_name'),
                        'link' => $this->input->post('link'),
                        'judul'   => $this->input->post('judul'),
                        'sub_content'   => $this->input->post('sub_content'),

                    );
           
             $where = array('id_slider' =>$this->input->post('id_slider'));           
            $this->M_admin->update_slider($where,$data,'Slider');
            //redirect('admin/slider');
            }
            }         
    
}
