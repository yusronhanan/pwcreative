<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
		$this->load->model('auth_model');
	}

	public function index()
	{
		$data = [
			'main_view' => 'home',
        ];
	if ($this->session->userdata('logged_in')==TRUE) {
		$this->load->view('template_true',$data);
	}
	else{
		$this->load->view('template_false',$data);
	}	
	}
	public function inspiration(){
			$data = [
			'main_view' => 'inspiration',
        ];
	if ($this->session->userdata('logged_in')==TRUE) {
		$this->load->view('template_true',$data);
	}
	else{
		$this->load->view('template_false',$data);
	}
	}
	public function chat(){
	if ($this->session->userdata('logged_in')==TRUE) {
	
			$data = [
			'chat_box_hidden' => 'true',
			'hidden_addpost' => 'true',
			'main_view' => 'chat',
        ];
		$this->load->view('template_true',$data);
	}
	}

	

	

}

/* End of file explore.php */
/* Location: ./application/controllers/explore.php */