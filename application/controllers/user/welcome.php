<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			if($this->session->userdata('role')==2){
				redirect('admin/welcome');
			}
		}else{
			redirect('welcome');
		}
	}

	public function index(){
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
	}
	public function about(){
		$this->load->view('user/header');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}
	function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('welcome','refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
