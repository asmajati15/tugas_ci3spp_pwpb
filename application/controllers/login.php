<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Login_model');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
        $cek_login=$this->Login_model->auth_login($username,$password);
 
        if($cek_login->num_rows() > 0){
			$data=$cek_login->row_array();
			$this->session->set_userdata('masuk',TRUE);
			if($data['level']=='admin'){
				$data_session = array(
					'nama' => $username,
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("/"));;
			}if($data['level']=='siswa'){
				$data_session = array(
					'nama' => $username,
					'status' => "siswa"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("/"));;
			}
		}else{
			redirect(base_url('login'));
		}
	}

	// function aksi_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->Login_model->cek_login("login",$where)->num_rows();
	// 	if($cek > 0){
 
	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login"
	// 			);
 
	// 		$this->session->set_userdata($data_session);
 
	// 		redirect(base_url("/"));
 
	// 	}else{
	// 		redirect(base_url('login'));
	// 	}
	// }
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}