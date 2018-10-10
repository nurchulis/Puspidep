<?php
class Kirim extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_kirim');
        $this->load->model('M_admin');
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
            $do="Memposting Sebuah Kiriman Project :".$this->input->post('judul_project');
            $level="1";         
            $this->log($level,$do);

    $this->db->insert('project_post',$data);
    redirect('HalamanAdmin/Posting_home');
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
    $do="Mengedit Sebuah Project :".$this->input->post('judul_project');
            $level="2";         
            $this->log($level,$do);
    $where = array('id_project_post' =>$this->input->post('id_project'));   
    $this->M_kirim->update_project($where,$data,'project_post');
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
    $do="Mengedit dan menganti Foto Sebuah Project :".$this->input->post('judul_project');
            $level="2";         
            $this->log($level,$do);
    $where = array('id_project_post' =>$this->input->post('id_project'));   
    $this->M_kirim->update_project($where,$data,'project_post');
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
     $do="Memposting Sebuah Portofolio :".$this->input->post('judul_portofolio');
            $level="1";         
            $this->log($level,$do);   

    $this->db->insert('portofolio',$data);
    redirect('HalamanAdmin/Posting_home');
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
     $do="Mengedit Sebuah Portofolio :".$this->input->post('judul_portofolio');
            $level="2";         
            $this->log($level,$do);   
    $where = array('id_portofolio' =>$this->input->post('id_portofolio'));   
    $this->M_kirim->update_project($where,$data,'portofolio');
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
     $do="Mengedit dan Menganti Foto Sebuah Portofolio :".$this->input->post('judul_portofolio');
            $level="2";         
            $this->log($level,$do); 

    $where = array('id_portofolio' =>$this->input->post('id_portofolio'));   
    $this->M_kirim->update_portofolio($where,$data,'portofolio');
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
     $do="Memposting Sebuah Blog :".$this->input->post('judul_blog');
            $level="1";         
            $this->log($level,$do);     
    $this->db->insert('blog',$data);
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
      $do="Mengedit  Sebuah Blog :".$this->input->post('judul_blog');
            $level="2";         
            $this->log($level,$do);  
    $where = array('id_blog' =>$this->input->post('id_blog'));   
    $this->M_kirim->update_blog($where,$data,'blog');
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
    $do="Mengedit dan menganti Foto Sebuah Blog :".$this->input->post('judul_blog');
            $level="2";         
            $this->log($level,$do);  
    $where = array('id_blog' =>$this->input->post('id_blog'));   
    $this->M_kirim->update_blog($where,$data,'blog');
   redirect('HalamanAdmin/Posting_home');
}
}  
    public function delete_project($id){
        $fact=$this->db->query('select * from project_post where id_project_post="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->gambar_project;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->gambar_project;
                unlink($path_to_file2);

                $do="Menghapus Sebuah Project :".$crut[0]->judul_project;
            $level="3";         
            $this->log($level,$do);     


             $this->db->delete('project_post', array('id_project_post'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }
     public function delete_blog($id){
        $fact=$this->db->query('select * from blog where id_blog="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->gambar_blog;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->gambar_blog;
                unlink($path_to_file2);   

         $do="Menghapus Sebuah Blog :".$crut[0]->judul_blog;
            $level="3";         
            $this->log($level,$do);   


             $this->db->delete('blog', array('id_blog'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }
      public function delete_por($id){
        $fact=$this->db->query('select * from portofolio where id_portofolio="'.$id.'"');
          $crut=$fact->result();

           $path_to_file = './Assets/images/Kiriman/'.$crut[0]->Gambar_portofolio;
                unlink($path_to_file);
        $path_to_file2 = './Assets/images/Kiriman/thumb/'.$crut[0]->Gambar_portofolio;
                unlink($path_to_file2);   

                 $do="Menghapus Sebuah Portofolio :".$crut[0]->Judul_portofolio;
            $level="3";         
            $this->log($level,$do);   


             $this->db->delete('portofolio', array('id_portofolio'=>$id));
            redirect('HalamanAdmin/Posting_home');
        }

    public function edit_slider(){

         
              $config['upload_path'] = './Assets/images/Kiriman/Slider';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar_kiriman')){
                

                        $ambil = array('upload_data' => $this->upload->data());
                        $this->load->model('M_admin');
                        $data = array(
                        'id_slider' =>$this->input->post('id_slider'),
                        'gambar_slider' => $this->input->post('slider_lama'),
                        'link' => $this->input->post('link'),
                        'judul'   => $this->input->post('judul'),
                        'sub_content'   => $this->input->post('sub_content'),

                    );
            $do="Mengedit sebuah slider Dengan judul :".$this->input->post('judul');
            $level="2";         
            $this->log($level,$do);  

                        $where = array(
                        'id_slider' =>$this->input->post('id_slider'));           
                        $this->M_admin->update_slider($where,$data,'slider');
                        redirect('HalamanAdmin/Setting');
                      
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
                $config['quality']= '100';
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 600;
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
              $do="Mengedit Foto slider Dengan judul :".$this->input->post('judul');
            $level="2";         
            $this->log($level,$do);
               
             $where = array('id_slider' =>$this->input->post('id_slider'));           
            $this->M_admin->update_slider($where,$data,'slider');
            redirect('HalamanAdmin/Setting');
            }
            }
     function edit_about_gambar(){
        $config['upload_path'] = './Assets/images';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size']    = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name']= true;
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar_about')){
                

                    }
                else{       

                $path_to_file = './Assets/images/'.$this->input->post('gambar_lama');
                unlink($path_to_file);

                $this->load->library('upload');
                $this->load->library('image_lib');
                $gbr = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './Assets/images/'.$gbr['file_name'];
                $config['new_image'] = './Assets/images/'.$gbr['file_name'];
                $config['quality']= '100';
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 600;
                $config['height']       = 450;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $ambil = array('upload_data' => $this->upload->data());
                $this->load->model('M_admin');
               $data = array(
                        'id_about' =>$this->input->post('id_about'),
                        'isi_about' => $this->upload->data('file_name'),
                        'place' => $this->input->post('place')

                    );
               $do="Mengedit Foto About ";
            $level="2";         
            $this->log($level,$do);
             
             $where = array('id_about' =>$this->input->post('id_about'));           
            $this->M_admin->update_about($where,$data,'about');
            redirect('HalamanAdmin/Setting');
            }
            }


     function edit_about(){
    $id = $this->input->post('id_about');
    $data = array(
        'id_about' => $this->input->post('id_about'),
        'isi_about' =>$this->input->post('isi_about'),
        'place'=> $this->input->post('place')
    );
 
    $where = array(
        'id_about' => $id
    );
    $do="Mengedit settingan di About ";
            $level="2";         
            $this->log($level,$do);
    $this->M_admin->update_about($where,$data,'about');
       redirect('HalamanAdmin/Setting');
    }
    public function hashpassword($password) {
        return md5($password);
    }
   function ganti_password(){
    $do="admin Menganti Password User lain";
    $level="2";  
    $this->log($level,$do);
    
    $id_admin = $this->input->post('id_admin');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $data = array(
        'id_admin' => $id_admin,
        'username' => $username,
        'password' => $this->hashpassword($password)
    );
 
    $where = array(
        'id_admin' => $id_admin
    );
    $this->M_admin->update_admin($where,$data,'admin');
    redirect('HalamanAdmin/User'); 
    }

    public function log($level,$do){
                $data = array(
                'id_log'=>'',
                'do'=>$do,
                'level'=>$level,
                'tgl'=>date("Y-m-d H:i:s")
                );
    $this->db->insert('log',$data);

            }


                  
    
}
