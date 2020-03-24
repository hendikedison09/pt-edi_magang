<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan_model extends CI_Model {

	public function cek_pelanggan()
{
	return $this->db->where('username',$this->input->post('username'))->where('password',$this->input->post('password'))->get('pelanggan');
}

	public function tambah_pelanggan(){
	$object = array(
		'nama_pelanggan' => $this->input->post('nama_pelanggan'),
		'telp' => $this->input->post('telp'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
	return $this->db->insert('pelanggan', $object);
}	

}


/* End of file Login_pelanggan_model.php */
/* Location: ./application/models/Login_pelanggan_model.php */