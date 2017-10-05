<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        $this->load->model('data_model');
        $this->load->model('auth_model');
		
	}

	public function index()
	{
		 if ($this->session->userdata('logged_in') == TRUE) {
    	    redirect('Home');
        } else {
        	$data = [
        		'countries'=> $this->auth_model->GetAllData('country'),
        	];
            $this->load->view('auth_view',$data);	
        }
	}

	public function login(){
	 	$this->form_validation->set_rules('username_email', 'Username or Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

                if ($this->form_validation->run() == TRUE ) {
                    $result = $this->auth_model->authentication();
                    echo $result;
                } else {
                    echo validation_errors();
                }
	}

  


	public function signup(){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('interest', 'Interest', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('repassword', 'Re-Password', 'trim|required');

            if ($this->form_validation->run() == TRUE ) {
                $password = $this->input->post('password');
                $password2 = $this->input->post('repassword');

                if ($password == $password2) {

                     
                    $result = $this->auth_model->insert_user();
                    echo $result;
                 
             
                } else {
                	echo "password_not_same";
                 
                    }
            } else {
            	echo validation_errors();
                    }	
	}

	public function check_usernameemail(){
		$type = $this->input->post('type');
		$value = $this->input->post('value');
		$query = $this->auth_model->GetUser(['username'=>$value]);
        $query2 = $this->auth_model->GetUser(['email'=>$value]);
        
        if ($type == "username") {
        if ($query->num_rows() > 0) {
        	echo 'username_exist';
        } 
        else{
        	echo 'username_not_exist';	
        }
    	}
    	 else if ($type == "email") {
    	if($query2->num_rows() > 0) {
        	echo 'email_exist';  
        }
        else{
        	echo 'email_not_exist';
        }
    	}
    	else if($type == "my-username_email"){
    		if ($query->num_rows() > 0) {
        	echo 'username_email_exist';
        } 
			if($query2->num_rows() > 0) {
        	echo 'username_email_exist';  
        }
		else{
        	echo 'username_email_not_exist';
        }
    	}
        
        	
	}


	public function Logout() {
        $this->session->sess_destroy();
        redirect('Auth');
    }
	

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */