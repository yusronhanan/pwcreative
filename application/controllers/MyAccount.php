<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
		$this->load->model('auth_model');
	}

	public function index()
	{
		
		if ($this->session->userdata('logged_in') != TRUE) {
            redirect('Home');
        } else {
        	$user_id = $this->session->userdata('logged_id');
        $data = [
        		'user_data'      => $this->data_model->GetData(['id_user' => $user_id],'user_profile')->row(),
        		// 'count_follower' => count($this->data_model->GetData(['followed_id' => $user_id],'user_following')->result()),
                'active' 		 => 'timeline',
                'hidden_addpost' => 'true',
                'main_view'      => 'header_my_account',
                'myaccount_view' => 'timeline_account',
            ];
            $this->load->view('template_true',$data);   
        }
 		
	}

	public function About(){

		if ($this->session->userdata('logged_in') != TRUE) {
            redirect('Home');
        } else {
        	$user_id = $this->session->userdata('logged_id');
        	
        	$data = [
        		'user_data'      => $this->data_model->GetData(['id_user' => $user_id],'user_profile')->row(),
        		// 'count_follower' => count($this->data_model->GetData(['followed_id' => $user_id],'user_following')->result()),
                'active' 		 => 'about',
                'hidden_addpost' => 'true',
                'main_view'      => 'header_my_account',
                'myaccount_view' => 'about_account',
            ];
            $this->load->view('template_true',$data);   
        }
	}

	public function Following(){
		if ($this->session->userdata('logged_in') != TRUE) {
            redirect('Home');
        } else {
        	$user_id = $this->session->userdata('logged_id');
        	
        	$data = [
        		'user_data'      => $this->data_model->GetData(['id_user' => $user_id],'user_profile')->row(),
        		// 'count_follower' => count($this->data_model->GetData(['followed_id' => $user_id],'user_following')->result()),
                'active' 		 => 'following',
                'hidden_addpost' => 'true',
                'main_view'      => 'header_my_account',
                'myaccount_view' => 'follow_account',
            ];
            $this->load->view('template_true',$data);   
        }	
	}

	public function Follower(){
		if ($this->session->userdata('logged_in') != TRUE) {
            redirect('Home');
        } else {
        	$user_id = $this->session->userdata('logged_id');
        	
        	$data = [
        		'user_data'      => $this->data_model->GetData(['id_user' => $user_id],'user_profile')->row(),
        		// 'count_follower' => count($this->data_model->GetData(['followed_id' => $user_id],'user_following')->result()),
                'active' 		 => 'follower',
                'main_view'      => 'header_my_account',
                'hidden_addpost' => 'true',
                'myaccount_view' => 'follow_account',
            ];
            $this->load->view('template_true',$data);   
        }	
	}


}

/* End of file MyAccount.php */
/* Location: ./application/controllers/MyAccount.php */