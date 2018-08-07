<?php
class Login extends CI_Controller {
	public $data = array();
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	
	}
	function index(){
		$this->load->view('Admin/Login');

	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
		'username' => $username,
		'password' => md5($password));
		$cek = $this->M_admin->cek_login("Admin",$where)->num_rows();
		
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

		$this->session->set_userdata($data_session);
		
			redirect(base_url('Admin'));

		}else{
		  
			redirect(base_url('Login?login=Login Gagal'));
		}}

	function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url('/Login'));
	}	

	}