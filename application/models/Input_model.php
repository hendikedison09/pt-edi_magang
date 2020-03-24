<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model {
    
    public function get_input()
    {
        $join_kat=$this->db
        ->order_by('no_urut')
        ->join('kategori','kategori.k_kategori=input.kategori')
        ->get('input')
        ->result();
        return $join_kat; 
    }

    public function masuk_saldo()
    {
        $saldo_awal = $this->input->post('saldo_awal');
        $jumlah = $this->input->post('jumlah');
        $kas = $saldo_awal - $jumlah;

        $data_saldo = array(
            'no_urut'=>$this->input->post('no_urut'),
            'k_saldo' =>$this->input->post('k_saldo'),
            'tgl' =>$this->input->post('tgl'),
            'kegiatan' =>$this->input->post('kegiatan'),
            'saldo_awal' =>$this->input->post('saldo_awal'),
            'saldo_kas_kecil'=> $kas
        );
        $masuk = $this->db->insert('input', $data_saldo);
        return $masuk;
    }

    public function masuk_bukti_cek()
    {
        $data_bukti_cek = array(
            'k_saldo' =>$this->input->post('kks'),
            'tgl' =>$this->input->post('tgl'),
            'bukti_cek' =>$this->input->post('bukti_cek')
        );
        $masuk = $this->db->insert('bukti_cek', $data_bukti_cek);
        return $masuk;
    }
    
    public function masuk_db($dataYangDiInput)
    {
        $saldo_awal = $this->input->post('saldo_awal');
        $jumlah = $this->input->post('jumlah');
        $kas = $saldo_awal - $jumlah;
    
        $data_input = array(
            'no_urut'=>$this->input->post('no_urut'),
            'k_saldo'=>$this->input->post('k_saldo'),
            'tgl'=>$this->input->post('tgl'),
            'no_bukti'=>$this->input->post('no_bukti'),
            'kegiatan'=>$this->input->post('kegiatan'),
            'saldo_awal'=>$this->input->post('saldo_awal'),
            'jumlah'=>$this->input->post('jumlah'),
            'saldo_kas_kecil'=> $kas,
            'kategori'=>$this->input->post('kategori')
        );
    
        $sql_masuk= $this->db->insert('input', $dataYangDiInput);
        return $sql_masuk;
    }
     public function get_log()
    {
        return $this->db->get('logger')->result();
    }
   public function get_jumlah()
   {
       $this->db->select('jumlah');
       $this->db->from('input');
       $query = $this->db->get();
       return $query->result();
   }
      
    public function get_kategori()
    {   
        $data_kategori=$this->db->get('kategori')->result();
        return $data_kategori;
    }
    
     public function get_kateg()
    {
        return $this->db->get('kateg')->result();
    }


    public function masuk_kateg()
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
            'entertain'=>$this->input->post('entertain'),
            'pos_paket'=>$this->input->post('pos_paket'),
            'perawatan_gedung'=>$this->input->post('perawatan_gedung'),
            'lain_lain'=>$this->input->post('lain_lain'),
            'perawatan_komputer'=>$this->input->post('perawatan_komputer'),
            'project'=>$this->input->post('project'),
            'telp_fax'=>$this->input->post('telp_fax'),
            'pdam_listrk'=>$this->input->post('pdam_listrk')
        );
        $kusam= $this->db->insert('kateg');
        return $kusam;
    }

    public function get_saldo($kegiatan='Saldo Awal')
    {
        $ambil = $this->db->where('kegiatan', $kegiatan)->get('input')->result();
        return $ambil;
    }

    public function hapus_saldo($k_saldo)
    {
        $delete = $this->db->where('k_saldo', $k_saldo)->delete('input');
        return $delete;
    }

    public function get_detail($k_saldo='')
    {
        $this->db->where('k_saldo',$k_saldo);
        $this->db->order_by('no_urut', 'ASC');
        $queryy = $this->db->get('input');
        return $queryy->result();
    }

    public function data_detail($id_input)
    {
        return $this->db->where('id_input',$id_input)->get('input')->result();
    }

    public function data_det($k_saldo)
    {
        return $this->db->where('k_saldo',$k_saldo)->get('input')->result();
    }
    
    public function nilai()
 {
     $this->db->select('input.saldo_kas_kecil, 8');
     $this->db->order_by('no_urut', 'desc');
     $query = $this->db->get('input');
     if ($query->num_rows()) {
         $kas = $query->row();
         $saldo_kas_kecil = intval($kas->saldo_kas_kecil) - 0;
 }   
     else {
         $saldo_kas_kecil = 0;
     }
     return $saldo_kas_kecil;

 }
    public function no_bukti()
    { 
        $this->db->select('RIGHT(input.no_bukti,2) as no_bukti', FALSE);
        $this->db->order_by('no_bukti', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input');
        if ($query->num_rows() <> 0) {       
            $bukti = $query->row();
            $no_bukti = intval($bukti->no_bukti) + 1;
        } else {
            $no_bukti = 1;
        }
            $tgl=date('y');
            $batas=str_pad($no_bukti, 3, "0", STR_PAD_LEFT);
            $no_bukti="COS"."/".$tgl."/".$batas;
            return $no_bukti;        
    }

    public function no_urut()
    { 
        $this->db->select('input.no_urut,2');
        $this->db->order_by('no_urut', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input');
        if ($query->num_rows()) {       
            $urutan = $query->row();
            $no_urut = intval($urutan->no_urut) + 1;
        } else {
            $no_urut = 1;
        }
            return $no_urut;        
    }

    public function norut()
    { 
        $this->db->select('input.no_urut,2');
        $this->db->order_by('no_urut', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input');
        if ($query->num_rows()) {       
            $nurut = $query->row();
            $no_urut = intval($nurut->no_urut) + 0;
        } else {
            $no_urut = 1;
        }
            return $no_urut;        
    }


    public function kode()
    {
        $this->db->select('RIGHT(input.k_saldo,2) as k_saldo', FALSE);
        $this->db->order_by('k_saldo', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input');
        if ($query->num_rows() <> 0) {       
            $ksal = $query->row();
            $k_saldo = intval($ksal->k_saldo) + 1;
        } else {
            $k_saldo = 1;
        }
            $batas=str_pad($k_saldo, 2, "0", STR_PAD_LEFT);
            $k_saldo="KKS".$batas;
            return $k_saldo;
    }

    public function kode_s()
    {
        $this->db->select('RIGHT(input.k_saldo,2) as k_saldo', FALSE);
        $this->db->order_by('k_saldo', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input');
        if ($query->num_rows() <> 0) {       
            $ks = $query->row();
            $k_saldo = intval($ks->k_saldo) + 0;
        } else {
            $k_saldo = 1;
        }
            $batas=str_pad($k_saldo, 2, "0", STR_PAD_LEFT);
            $k_saldo="KKS".$batas;
            return $k_saldo;
    }

     public function kat1($kategori='K01')
    {   
        $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1;
        
    }
    public function kat2($kategori='K02')
    {
        $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1;  
    }
     public function kat3($kategori='K03')
    {
        $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1;  
    }
    public function kat4($kategori='K04')
    {
        $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1;  
    }
    public function kat5($kategori='K05')
    {
        $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat6($kategori='K06')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat7($kategori='K07')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat8($kategori='K08')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat9($kategori='K09')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat10($kategori='K10')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat11($kategori='K11')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat12($kategori='K12')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat13($kategori='K13')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat14($kategori='K14')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat15($kategori='K16')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat16($kategori='K16')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function kat17($kategori='K17')
    {
         $kategori1 = $this->db->where('kategori', $kategori)->order_by('id_input','ASC')->get('input')->result();
        return $kategori1; 
    }
    public function tambah($k_saldo='')
    {
        $this->db->where('k_saldo', $k_saldo);
        $this->db->select_sum('jumlah');
        $this->db->order_by('jumlah');
        $result = $this->db->get('input')->row(); 
        return $result->jumlah;
    }

    public function tambah_kas_kecil()
    {
        $this->db->select_sum('saldo_kas_kecil');
        $this->db->order_by('saldo_kas_kecil');
        $result = $this->db->get('input')->row(); 
        return $result->saldo_kas_kecil;
    }

    public function detail_input($id_input='')
    {
        return $this->db->where('id_input',$id_input)->get('input')->row();
    }

    public function edit_data()
    {
		$dt_up_input=array(
            'k_saldo'=>$this->input->post('k_saldo'),
			'tgl'=>$this->input->post('tgl'),
			'no_bukti'=>$this->input->post('no_bukti'),
			'kegiatan'=>$this->input->post('kegiatan'),
			'jumlah'=> $this->input->post('jumlah')
		);
			return $this->db->where('id_input',$this->input->post('id_input'))->update('input', $dt_up_input);
	}

    public function hapus_input($id_input)
    {
        $delete = $this->db->where('id_input', $id_input)->delete('input');
        return $delete;
    }

    public function view_by_no_bukti($no_bukti)
    {
        $filter = $this->db->where('no_bukti', $no_bukti)->get('input')->result(); // Tambahkan where no_bukti
        return $filter;// Tampilkan data transaksi sesuai no_bukti yang diinput oleh user pada filter
    }

    // select_sum('jumlah')->
    public function totalan($no_bukti)
    {
        $this->db->select_sum('jumlah');
        $this->db->where('no_bukti', $no_bukti);
        $result = $this->db->get('input')->row(); 
        return $result->jumlah;
    }

    public function view_all(){
        return $this->db->get('input')->result(); // Tampilkan semua data transaksi
      }

    public function option_no_bukti($k_saldo='')
    {
        $this->db->select('no_bukti AS no_bukti'); // Ambil no_bukti dari field no_bukti
        $this->db->from('input'); // select ke tabel input
        $this->db->order_by('no_bukti', 'desc'); // Urutkan berdasarkan no_bukti secara Ascending (ASC)
        $this->db->group_by('no_bukti'); // Group berdasarkan no_bukti pada field no_bukti
        $this->db->where('k_saldo', $k_saldo);
        
        return $this->db->get()->result(); // Ambil data pada tabel input sesuai kondisi diatas
    }

    public function savedata()
    {
        $data_input = array(
            'tgl' => $this->input->post('tgl'),
            'bukti_cek' => $this->input->post('bukti_cek'),
            'kegiatan' => $this->input->post('kegiatan'),
            'jumlah' => $this->input->post('jumlah')
        );

        $masuk=$this->db->insert('pengeluaran_bank', $data_input);
        return $masuk;
    }

    public function getdata()
    {
      $query= $this->db->get('pengeluaran_bank');
      return $query->result();
    }

    public function hapusdata($id_pengeluaran)
    {
        $delete = $this->db->where('id_pengeluaran', $id_pengeluaran)->delete('pengeluaran_bank');
        return $delete;
    }

    public function update_pengeluaran()
    {
        $dt_pengeluaran=array(
			'tgl'=>$this->input->post('tgl'),
			'bukti_cek'=>$this->input->post('bukti_cek'),
			'kegiatan'=>$this->input->post('kegiatan'),
			'jumlah'=> $this->input->post('jumlah')
		);
		return $this->db->where('id_pengeluaran',$this->input->post('id_pengeluaran'))->update('pengeluaran_bank', $dt_pengeluaran);
    }

    public function get_form($id_pengeluaran='')
    {
        $this->db->where('id_pengeluaran',$id_pengeluaran);
        $queryy = $this->db->get('pengeluaran_bank');
        return $queryy->result();
    }

    public function pengajuan_data()          
    {
        $pengajuan_input = array(
            'tgl' => $this->input->post('tgl'),
            'bukti' => $this->input->post('bukti'),
            'kegiatan' => $this->input->post('kegiatan'),
            'jumlah' => $this->input->post('jumlah')
        );

        $masuk=$this->db->insert('pengajuan_uang_muka', $pengajuan_input);
        return $masuk;
    }

    public function get_pengajuan_data($id_pengajuan='')
    {
        $this->db->where('id_pengajuan',$id_pengajuan);
        $query=$this->db->get('pengajuan_uang_muka');
        return $query->result();
    }

    public function get_pengajuan()
    {
        $query= $this->db->get('pengajuan_uang_muka');
        return $query->result();
    }

    public function update_pengajuan()
    {
        $dt_pengajuan=array(
			'tgl'=>$this->input->post('tgl'),
			'bukti'=>$this->input->post('bukti'),
			'kegiatan'=>$this->input->post('kegiatan'),
			'jumlah'=> $this->input->post('jumlah')
		);
		return $this->db->where('id_pengajuan',$this->input->post('id_pengajuan'))->update('pengajuan_uang_muka', $dt_pengajuan);
    }

    public function hapus_pengajuan($id_pengajuan)
    {
        $delete = $this->db->where('id_pengajuan', $id_pengajuan)->delete('pengajuan_uang_muka');
        return $delete;
    }

    public function pertanggungan()
    {
        $pertanggung_input = array(
            'tgl' => $this->input->post('tgl'),
            'bukti_cek' => $this->input->post('bukti_cek'),
            'kegiatan' => $this->input->post('kegiatan'),
            'jumlah' => $this->input->post('jumlah')
        );

        $masuk=$this->db->insert('pertanggungan_uang', $pertanggung_input);
        return $masuk;
    }

    public function get_pertanggungan_data($id_pertanggungan='')
    {
        $this->db->where('id_pertanggungan',$id_pertanggungan);
        $query=$this->db->get('pertanggungan_uang');
        return $query->result();
    }

    public function hapus_pertanggungan($id_pertanggungan)
    {
        $delete = $this->db->where('id_pertanggungan', $id_pertanggungan)->delete('pertanggungan_uang');
        return $delete;
    }

    public function get_pertanggungan()
    {
        $query= $this->db->get('pertanggungan_uang');
        return $query->result();
    }

    public function update_pertanggungan()
    {
        $dt_pertanggungan=array(
			'tgl'=>$this->input->post('tgl'),
			'bukti_cek'=>$this->input->post('bukti_cek'),
			'kegiatan'=>$this->input->post('kegiatan'),
			'jumlah'=> $this->input->post('jumlah')
		);
		return $this->db->where('id_pertanggungan',$this->input->post('id_pertanggungan'))->update('pertanggungan_uang', $dt_pertanggungan);
    }

    public function jumlah($k_saldo='')
    {
        $this->db->select('k_saldo', $k_saldo);
        $this->db->select_sum('jumlah');
        $this->db->order_by('jumlah');
        $result = $this->db->get('input')->row(); 
        return $result->jumlah;
    }

    public function get_laporan($k_saldo='')
    { 
        return $this->db->where('k_saldo',$k_saldo)->get('input')->row();
    }
    public function get_bukti_cek($k_saldo='')
    { 
        return $this->db->where('k_saldo',$k_saldo)->get('bukti_cek')->row();
    }

}


/* End of file input_model.php */
/* Location: ./application/models/input_model.php */