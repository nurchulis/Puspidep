<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
			parent::__construct();
      $this->load->library('pagination');

			$this->load->model('M_admin');

			$this->load->model('M_Tampil_about');
	              $this->load->helper('url');
	     
	             if($this->session->userdata('status') != "login"){
			redirect(base_url("/Login"));
                        $this->session->set_userdata('username','1');
		} 
		}
		

	public function index($page='Home',$id= null)
	{	$data['pro']= $this->M_admin->count_pro();
		$data['blg']= $this->M_admin->count_blog();
		$data['por']= $this->M_admin->count_por();
		$data['tampil_about']=$this->M_Tampil_about->tampil_about();
		$data['data_slider']=$this->M_Tampil_about->tampil_slider();
		$data['ambil_project']=$this->M_admin->ambil_edit_project($id);
		$data['ambil_blog']=$this->M_admin->ambil_blog($id);
		$data['ambil_portofolio']=$this->M_admin->ambil_portofolio($id);
		$data['data_project_semua']=$this->M_admin->tampil_project();
		$data['data_blog']=$this->M_admin->tampil_blog();
		$data['data_portofolio']=$this->M_admin->tampil_portofolio();
		$this->load->view('Admin/Header.php');
		$this->load->view('Admin/'.$page,$data);
		$this->load->view('Admin/Footer.php');
	}
}

