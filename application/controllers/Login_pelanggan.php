<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login_pel');
	}

	public function proses()
	{
		$this->load->model('login_pelanggan_model','login_p_m');
		$login = $this->login_p_m->cek_pelanggan();
		if ($login->num_rows()>0) {
			$dt_pel = $login->row();
			$array = array(
				'id_pelanggan' => $dt_pel->id_pelanggan,
				'nama_pelanggan' => $dt_pel->nama_pelanggan,
				'username' => $dt_pel->username,
				'password' => $dt_pel->password,
				'login_pelanggan' => true
				);

			$this->session->set_userdata($array);
			$data['status']=1;
			echo json_encode($data);
		} else {
			$data['status'] = 0;
			echo json_encode($data);
		}
	}

	public function simpan()
	{
		$this->load->model('login_pelanggan_model','login_p_m');
		$cek_data = $this->login_p_m->tambah_pelanggan();
		if($cek_data){
			$data['status'] = 1;
			$data['keterangan'] = "Anda Sukses Menambah Data";
			echo json_encode($data);
		} else {
			$data['status'] = 0;
			$data['keterangan'] = "Anda Gagal Menambah Data";
			echo json_encode($data);
		}
	}

}

/* End of file Login_pelanggan.php */
/* Location: ./application/controllers/Login_pelanggan.php */