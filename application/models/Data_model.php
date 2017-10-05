<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
	
	}
	// sampai sini
	public function getview_detail($limit, $start)
{
    $this->db->limit($limit, $start);
    $query = $this->db->get('form');
    return $query->result_array();
}
	
	public function GetData($where,$table)
    {
      return $this->db->where($where)->get($table);
    }

    public function GetAllData($table)
    {
    return $this->db->get($table)->result();
	}    

}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */