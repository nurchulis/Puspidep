<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
			parent::__construct();
      $this->load->library('pagination');
			$this->load->model('M_Tampil_project');
			$this->load->model('M_Tampil_about');
			$this->load->model('M_Tampil_blog');
			$this->load->model('M_admin');
			$this->load->model('M_Tampil_Portofolio');
	                $this->load->helper('url');
		}


	public function index($page='Homeuser',$id= null)
	{
		//Konfigurasi Paginasi
		if($this->uri->segment('2') == 'Blog'){
					$config['base_url']=base_url()."Halaman/Blog";
			        $config['total_rows']= $this->db->query("SELECT * FROM blog")->num_rows();
		}else if($this->uri->segment('2') == 'Portofolio') {

					$config['base_url']=base_url()."Halaman/Portofolio";
			        $config['total_rows']= $this->db->query("SELECT * FROM portofolio")->num_rows();
		}else  {
			$config['base_url']=base_url()."Halaman/Project";
					$config['total_rows']= $this->db->query("SELECT * FROM project_post")->num_rows();
		}

        $config['per_page']=6;
        $config['num_links'] = 1;
        $config['uri_segment']=3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='» ';
        $config['prev_link']='« ';
        $this->pagination->initialize($config);


		$tgl=$this->uri->segment('4');

		$data['pro']= $this->M_admin->count_pro();
		$data['blg']= $this->M_admin->count_blog();
		$data['por']= $this->M_admin->count_por();

		$data['tampil_project']=$this->M_Tampil_project->tampil_project();
		$data['tampil_slider_project']=$this->M_Tampil_project->tampil_project_slider();
		$data['tampil_about']=$this->M_Tampil_about->tampil_about();
		$data['tampil_portofolio_home']=$this->M_Tampil_Portofolio->tampil_portofolio_home();
		$data['tampil_blog']=$this->M_Tampil_blog->tampil_blog($config);
		$data['tampil_blog_1']=$this->M_Tampil_blog->tampil_blog_home();
		$data['tampil_project_post']=$this->M_Tampil_project->tampil_project_post($config);
		$data['tampil_project_post_1']=$this->M_Tampil_project->tampil_project_1();
		$data['tampil_blog_home']=$this->M_Tampil_blog->tampil_blog_home();
		$data['tampil_portofolio']=$this->M_Tampil_Portofolio->tampil_portofolio($config);
		$data['data_slider']=$this->M_Tampil_about->tampil_slider();
		$data['tampil_portofolio_di']=$this->M_Tampil_Portofolio->tampil_portofolio_home();
		$data['tampil_project_id']=$this->M_Tampil_project->tampil_pilih_project($id,$tgl)->result();
		$data['tampil_blog_id']=$this->M_Tampil_blog->tampil_pilih_blog($id,$tgl)->result();
		$data['tampil_portofolio_id']=$this->M_Tampil_Portofolio->tampil_pilih_portofolio($id,$tgl)->result();


		$this->load->view('Home/Header.php');
		$this->load->view('Home/'.$page,$data);
		$this->load->view('Home/Footer.php');
	}
}
