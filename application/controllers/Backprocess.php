<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backprocess extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
		$this->load->model('auth_model');
	}

	public function index()
	{
		
	}
	public function loadmore()
 {
    $page= $this->input->get('');
    $per_page = 10;
    $student = $this->Form_model->getview_detail($per_page,$page);
    if($student !== FALSE)
    {
        echo json_encode($student); //send data to script
    }
}

}

/* End of file Backprocess.php */
/* Location: ./application/controllers/Backprocess.php */