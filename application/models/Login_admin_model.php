<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin_model extends CI_Model {

	public function get_login()
	{
		return $this->db->where('username',$this->input->post('username'))->where('password',$this->input->post('password'))->get('user');
	}

}

/* End of file Login_admin_model.php */
/* Location: ./application/models/Login_admin_model.php */