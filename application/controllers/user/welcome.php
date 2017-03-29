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

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
