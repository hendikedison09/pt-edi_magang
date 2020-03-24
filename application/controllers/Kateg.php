<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kateg extends CI_Controller {

	public function index()
	{	
		$data['konten'] = "v_kateg";
		$this->load->model('kateg_model','kateg_m');
		$data['data_kateg']=$this->kateg_m->get_kateg();
		$this->load->view('template',$data,FALSE);
	}

	 public function simpan_kateg()
    {
        $this->form_validation->set_rules('konsumsi', 'Konsumsi','trim');
        $this->form_validation->set_rules('transportasi', 'Transportasi','trim');
        $this->form_validation->set_rules('kehumasan', 'Kehumasan','trim');
        $this->form_validation->set_rules('perlengkapan_kantor', 'Perlengkapan_kantor','trim');
        $this->form_validation->set_rules('peralatan_kantor', 'Peralatan_kantor','trim');
        $this->form_validation->set_rules('peralatan_komputer', 'Peralatan_komputer','trim');
        $this->form_validation->set_rules('fotocopy_jilid', 'Fotocopy_jilid','trim');
        $this->form_validation->set_rules('perawatan_peralatan', 'Perawatan_peralatan','trim');
        $this->form_validation->set_rules('perawatan_kendaraan', 'Perawatan_kendaraan','trim');
        $this->form_validation->set_rules('entertain', 'Entertain','trim');
        $this->form_validation->set_rules('pos_paket', 'Pos_paket','trim');
        $this->form_validation->set_rules('perawatan_gedung', 'Perawatan_gedung','trim');
        $this->form_validation->set_rules('lain_lain', 'Lain-lain','trim');
        $this->form_validation->set_rules('perawatan_komputer', 'Perawatan_komputer','trim');
        $this->form_validation->set_rules('project', 'Project','trim');
        $this->form_validation->set_rules('telp_fax', 'Telp_fax','trim');
        $this->form_validation->set_rules('pdam_listrik', 'Pdam_listrik','trim');
      
           if ($this->form_validation->run()) {
            $this->load->model('kateg_model','kateg_m');
            $masuk=$this->kateg_m->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');
            }
            else{
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');            
            }
            
            redirect(base_url('index.php/kateg'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/kateg'),'refresh');
            
        }
     
    }
}

/* End of file Kateg.php */
/* Location: ./application/controllers/Kateg.php */