<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->helper('string');
		}


    public function authentication(){
        $username_email = $this->input->post('username_email');
        $password = $this->input->post('password');
        $role = $this->GetUser(['email'=>$username_email])->row('role');
        $id = $this->GetUser(['email'=>$username_email])->row('id_user');
        //name by email
        $name = $this->GetUser(['email'=>$username_email])->row('name');
        //name by username
        $name2 = $this->GetUser(['username'=>$username_email])->row('name');
        $role2 = $this->GetUser(['username'=>$username_email])->row('role');
        $id2 = $this->GetUser(['username'=>$username_email])->row('id_user');
        

        $query = $this->GetUser(['email'=>$username_email,'password'=>md5($password)]);
        $query2 = $this->GetUser(['username'=>$username_email,'password'=>md5($password)]);
        if ($query->num_rows() > 0) {
            $data = [
                'logged_id'     => $id,
                // 'logged_email'  => $email,
                'logged_name'   => $name,
                'level'         => $role,
                'logged_in'     => TRUE
            ];
            $this->session->set_userdata( $data );
            return "TRUE";
        } else if($query2->num_rows() > 0) {
            $data = [
                'logged_id'     => $id2,
                // 'logged_email'  => $email,
                'logged_name'   => $name2,
                // 'logged_phone'  => $phone,
                // 'logged_address'=> $address,
                'level'         => $role2,
                'logged_in'     => TRUE
            ];
            $this->session->set_userdata($data);
            return "TRUE";
        }
         else {
            return "FALSE";
        }
    }
	public function insert_user(){
		$email = $this->input->post('email');
        $username = $this->input->post('username');
        $hash_random = random_string('alnum',15);

        $query1 = $this->GetUser(['username'=> $username]); //validation an exist username
        $query2 = $this->GetUser(['email'=> $email]); //validation an exist email

        if($query1->num_rows() > 0) {
            return "username_exist";
        }
        else if($query2->num_rows() > 0) {
            return "email_exist";
        }
        
        else{
        $query_insert = $this->db->insert('user_profile', array(
            'username'  => $username,
            'email'  	=> $email,
            'password'  => md5($this->input->post('password')),
            'name'      => $this->input->post('name'),
            'phone'     => $this->input->post('phone'),
            'location'  => $this->input->post('country').', '.$this->input->post('city'),
            
            // 'image'     => $photo['file_name'],

            // 'place_of_birth'  => $this->input->post('country').'-'.$this->input->post('city'),
            // 'date_of_birth'  => $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day'),
            'interest'  => $this->input->post('interest'),
            'gender'  => $this->input->post('gender'),
            'hash_validation'  => $hash_random,
            
            'created_at'=> date('Y-m-d H:i:s'),   
            'last_update'=> date('Y-m-d H:i:s'),
        ));
        if ($this->db->affected_rows() > 0) {
            
            return "TRUE";
        } else {
            return "FALSE";
        }
    }
	}
	public function GetUser($where)
    {
      return $this->db->where($where)->get('user_profile');
    }

    public function GetAllData($table){
    return $this->db->get($table)->result();
}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */