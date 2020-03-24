<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kateg_model extends CI_Model {

	public function get_kateg()
	{
		return $this->db->get('kateg')->result();
	}	
	public function masuk_db()
	{
		$data_kateg = array(
		'konsumsi'=>$this->input->post('konsumsi'),
            'transportasi'=>$this->input->post('transportasi'),
            'kehumasan'=>$this->input->post('kehumasan'),
            'perlengkapan_kantor'=>$this->input->post('perlengkapan_kantor'),
            'peralatan_kantor'=>$this->input->post('peralatan_kantor'),
            'peralatan_komputer'=>$this->input->post('peralatan_komputer'),
            'fotocopy_jilid'=>$this->input->post('fotocopy_jilid'),
            'perawatan_peralatan'=>$this->input->post('perawatan_peralatan'),
            'perawatan_kendaraan'=>$this->input->post('perawatan_kendaraan'),
            'entertain'=>$this->input->post('entertain'),
            'pos_paket'=>$this->input->post('pos_paket'),
            'perawatan_gedung'=>$this->input->post('perawatan_gedung'),
            'lain_lain'=>$this->input->post('lain_lain'),
            'perawatan_komputer'=>$this->input->post('perawatan_komputer'),
            'project'=>$this->input->post('project'),
            'telp_fax'=>$this->input->post('telp_fax'),
            'pdam_listrik'=>$this->input->post('pdam_listrik')
		);
		$masuk = $this->db->insert('kateg',$data_kateg);
		return $masuk;
	}
}

/* End of file kateg_model.php */
/* Location: ./application/models/kateg_model.php */