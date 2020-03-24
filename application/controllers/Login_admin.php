 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_admin_model');
	}

	public function index()
	{
		$this->load->view('v_login_admin');
	}

public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required',array('required'=>'Username harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'Password harus diisi'));
		
		
		
		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/login_admin'));
			} else {
				$this->load->model('login_admin_model');
				$cek_login=$this->login_admin_model->get_login();
				if($cek_login->num_rows()>0){
					$data_login=$cek_login->row();
					$array = array(
						'id_user' => $data_login->id_user,
						'username'=>$data_login->username,
						'password'=>$data_login->password,
						'nama_user'=>$data_login->nama_user,
						'login'=>true,
						'id_level'=>$data_login->id_level
					);
					
					$this->session->set_userdata( $array );
					redirect(base_url('index.php/input/loger'));
				} else {
					$this->session->set_flashdata('pesan', 'username dan password tidak cocok');
					redirect(base_url('index.php/login_admin'));
				}
			}
		}

		 public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('input/login_bos','refresh');
    }
			
	
	
	

}

/* End of file Login_admin.php */
/* Location: ./application/controllers/Login_admin.php */
?>