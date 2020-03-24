<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$data['konten']="v_pelanggan";
		$this->load->model('pelanggan_model','pelanggan_m');
		$data['data_pelanggan']=$this->pelanggan_m->get_pelanggan();
		$this->load->view('template', $data, FALSE);
	}
	public function simpan_pelanggan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
        array('required' => 'Data Harus lengkap!'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('pelanggan_model','pelanggan_m');
            $masuk=$this->pelanggan_m->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');
            }
            else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">data gagal ditambahkan</div>');            
            }
            
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        }
    }

    public function get_detail_pelanggan($id_pelanggan='')
    {
        $this->load->model('pelanggan_model');
        $data_detail=$this->pelanggan_model->detail_pelanggan($id_pelanggan);
        echo json_encode($data_detail); 
    }

    public function update_pelanggan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        

        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            
            redirect(base_url('index.php/pelanggan'),'refresh');   
        } else {
            $this->load->model('pelanggan_model');
            $proses_update=$this->pelanggan_model->update_pelanggan();
            if($proses_update){
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">data telah diperbarui</div>');        
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">data gagal diperbarui</div>');
            }      
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        }
        
    }

     public function hapus_pelanggan($id_pelanggan)
    {
        $this->load->model('pelanggan_model','pelanggan_m');
        $proses_delete = $this->pelanggan_m->hapus_pelanggan($id_pelanggan);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">osi hapus data</div>');
            
        } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }

        redirect(base_url('index.php/pelanggan'),'refresh');
        
    }

}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */