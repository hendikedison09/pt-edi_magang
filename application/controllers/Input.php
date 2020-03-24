<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index()
	{
        $this->load->model('input_model','input_m');
        $data['data_input']=$this->input_m->get_input();

		$this->load->view('template/header');
        $this->load->view('v_home', $data);
        $this->load->view('template/footer');
    }

    public function login_bos()
    {
    $data['konten']="v_login_bos";
    $this->load->view('v_login_bos');
    }

      public function log()
    {
       $data['data_log']=$this->input_model->get_log();
       $this->load->view('template/header');
       $this->load->view('v_log', $data);
       $this->load->view('template/footer');
    }
     public function log2()
    {
       $data['data_log']=$this->input_model->get_log();
       $this->load->view('template/header');
       $this->load->view('v_log2', $data);
       $this->load->view('template/footer');
    }
    
       public function loger()
{
    $this->load->library('logger');
    $this->logger
     ->user(1) //Set UserID, who created this  Action
     ->type('admin') //Entry type like, Post, Page, Entry
     ->id(1) //Entry ID
     ->token('login_admin') //Token identify Action
   
     ->log(); //Add Database Entry
    redirect(base_url('input/data'));
}
      public function loger2()
{
    $this->load->library('logger');
    $this->logger
     ->user(1) //Set UserID, who created this  Action
     ->type('user') //Entry type like, Post, Page, Entry
     ->id(1) //Entry ID
     ->token('login_user') //Token identify Action
    

     ->log(); //Add Database Entry
    redirect(base_url('input/log2'));   
}


    function data($id_input='')
    {
        $this->load->model('input_model','input_m');
		$data['data_input']=$this->input_m->get_input();
        $data['no_bukti']= $this->input_m->no_bukti();
        $data['nilai']= $this->input_m->nilai();
        $data['tambah']= $this->input_m->tambah();
        $data['no_urut']= $this->input_m->no_urut();
        $data['norut']= $this->input_m->norut();
        // $data['kode']= $this->input_m->kode();
        $data['kode_s']= $this->input_m->kode_s();
        $data['data_kategori']=$this->input_model->get_kategori();
        $data['data_kateg']=$this->input_model->get_kateg();
        
        $this->load->view('template/header');
        $this->load->view('v_input', $data, FALSE);
        $this->load->view('template/footer');
    }
     function data1($id_input='')
    {
        $this->load->model('input_model','input_m');
        $data['data_input']=$this->input_m->get_input();
        $data['no_bukti']= $this->input_m->no_bukti();
        $data['nilai']= $this->input_m->nilai();
        $data['tambah']= $this->input_m->tambah();
        $data['no_urut']= $this->input_m->no_urut();
        $data['norut']= $this->input_m->norut();
        $data['kode']= $this->input_m->kode();
        $data['kode_s']= $this->input_m->kode_s();
        $data['data_kategori']=$this->input_model->get_kategori();
        $data['data_kateg']=$this->input_model->get_kateg();
        
        $this->load->view('template/header');
        $this->load->view('v_input2', $data, FALSE);
        $this->load->view('template/footer');
    }

   
    public function kateg()
    {
        $data['data_kateg']=$this->input_model->get_kateg();
        $this->load->view('v_kateg',$data);

    }

    public function det_transaksi()
    {
        $this->load->model('input_model','input_m');
        $data['ambil']=$this->input_m->get_saldo();
        $this->load->view('template/header');
        $this->load->view('v_saldo', $data);
        $this->load->view('template/footer');
    }
    public function det_transaksi1()
    {
        $this->load->model('input_model','input_m');
        $data['ambil']=$this->input_m->get_saldo();
        $this->load->view('template/header');
        $this->load->view('v_saldo1', $data);
        $this->load->view('template/footer');
    }

    public function simpan_saldo()
    {
        $this->form_validation->set_rules('k_saldo', 'k_saldo', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl', 'Tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('saldo_awal', 'saldo_awal', 'trim|required', array('required' => '%s harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('input_model','input_m');
            $masuk=$this->input_m->masuk_saldo();
            if($masuk==true){
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');
            }
            else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">data gagal ditambahkan</div>');            
            }
            
            redirect(base_url('input/data'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('input/data'),'refresh');
            
        }
    }

    public function hapus_saldo($k_saldo)
    {
        $this->load->model('input_model','input_m');
        $proses_hapus= $this->input_m->hapus_saldo($k_saldo);

        if ($proses_hapus== TRUE) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">berhasil hapus data</div>');
            
        } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }

        redirect(base_url('input/det_transaksi'),'refresh');
        
    }


	public function simpan_input()
    {
        $this->form_validation->set_rules('tgl', 'Tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('saldo_awal', 'saldo_awal', 'trim|required', array('required' => '%s harus diisi'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('input_model','input_m');
            $masuk=$this->input_m->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');
            }
            else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">data gagal ditambahkan</div>');            
            }
            
            redirect(base_url('input'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('input'),'refresh');
            
        }
        
    }

    public function bukti_cek()
    {
        $this->form_validation->set_rules('k_saldo', 'k_saldo', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl', 'Tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti_cek', 'saldo_awal', 'trim|required', array('required' => '%s harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('input_model','input_m');
            $masuk=$this->input_m->masuk_bukti_cek();
            if($masuk==true){
                $this->session->set_flashdata('pesan','<div class="alert alert-success">data berhasil ditambahkan</div>');
            }
            else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">data gagal ditambahkan</div>');            
            }
            
            redirect(base_url('input/det_transaksi'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('input/det_transaksi'),'refresh');
            
        }
    }

    public function get_detail_input($id_input='')
	{
		$this->load->model('input_model');
		$input_detail=$this->input_model->detail_input($id_input);
		echo json_encode($input_detail);
    }

    public function detail()
    {
        $this->load->model('input_model');
        $detail=$this->input_model->data_detail($id_input);
        return $detail->result();
    }

    public function laporan_kas_kecil($k_saldo='')
    {
        $data['tambah']= $this->input_model->tambah($k_saldo);
        $data['bukti_cek']= $this->input_model->get_bukti_cek($k_saldo);
        $data['laporan_kas_kecil']= $this->input_model->get_laporan($k_saldo);
        $this->load->view('v_laporan_kas_kecil', $data);
    }

    public function update_data()
    {

        $this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required',array('required' => 'Tanggal harus diisi'));
		$this->form_validation->set_rules('no_bukti', 'No Bukti', 'trim|required',array('required' => 'No bukti harus diisi'));
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required',array('required' => 'Kegiatan harus diisi'));
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required',array('required' => 'Jumlah harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">'.validation_errors().'</div>');
			redirect(base_url('input/data'),'refresh');
		} else {
			$this->load->model('input_model');
			$proses_update=$this->input_model->edit_data();
			if($proses_update==true){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">sukses update sam</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
			}
			redirect(base_url('input/data'),'refresh');
		}
    }

     public function hapus_input($id_input)
    {
        $this->load->model('input_model','input_m');
        $proses_delete = $this->input_m->hapus_input($id_input);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">berhasil hapus data</div>');
            
        } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }

        redirect(base_url('input/data'),'refresh');
        
    }

    public function histori($k_saldo='')
    {
        $data['detail']=$this->input_model->get_detail($k_saldo);
        $data['tambah']= $this->input_model->tambah($k_saldo);
        $data['tambah_kas_kecil']= $this->input_model->tambah_kas_kecil();
        $this->load->view('v_laporan', $data);
    }

    public function data_detail($k_saldo='')
    {
        $data['data_input']=$this->input_model->data_det($k_saldo);
        $url_cetak = 'input/cetak?filter=1&no_bukti=';
        $data['url_cetak'] = base_url($url_cetak);
        $data['option_no_bukti']=$this->input_model->option_no_bukti($k_saldo);
        $this->load->view('v_data_detail', $data);
    }
      public function kategori($kategori='')
    {
         $data['nama_kategori']=$this->input_model->get_kategori();
         $data['data_kategori1']=$this->input_model->kat1();
         $data['data_kategori2']=$this->input_model->kat2();
         $data['data_kategori3']=$this->input_model->kat3();
         $data['data_kategori4']=$this->input_model->kat4();
         $data['data_kategori5']=$this->input_model->kat5();
         $data['data_kategori6']=$this->input_model->kat6();
         $data['data_kategori7']=$this->input_model->kat7();
         $data['data_kategori8']=$this->input_model->kat8();
         $data['data_kategori9']=$this->input_model->kat9();
         $data['data_kategori10']=$this->input_model->kat10();
         $data['data_kategori11']=$this->input_model->kat11();
         $data['data_kategori12']=$this->input_model->kat12();
         $data['data_kategori13']=$this->input_model->kat13();
         $data['data_kategori14']=$this->input_model->kat14();
         $data['data_kategori15']=$this->input_model->kat15();
         $data['data_kategori16']=$this->input_model->kat16();
         $data['data_kategori17']=$this->input_model->kat17();
         $this->load->view('v_kategori',$data);
    }
    public function filter()
    {
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter'];// Ambil data filder yang dipilih user
            if($filter == '1') 
            { // Jika filter nya 1 (per no_bukti)
                $no_bukti = $_GET['no_bukti'];
                $url_cetak = 'input/cetak?filter=1&no_bukti='.$no_bukti;
                $get_filter = $this->input_model->view_by_no_bukti($no_bukti);
                // $data['data_input'] = $get_filter;
            } else {
                $get_filter = $this->input_model->view_all();
            }
              
            $data['url_cetak'] = base_url($url_cetak);
            $data['data_input'] = $get_filter;
        }

        
        $this->load->view('v_data_detail', $data); // Panggil fungsi view_data_detail yang ada di inputModel
    }

    public function cetak()
    {
        
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter'];// Ambil data filder yang dipilih user
            if($filter == '1') 
            { // Jika filter nya 1 (per no_bukti)
                $no_bukti = $_GET['no_bukti'];
                $get_filter = $this->input_model->view_by_no_bukti($no_bukti);
                $get_totalan = $this->input_model->totalan($no_bukti);
                $data['nambah'] = $get_totalan;
                $data['data_input'] = $get_filter;
                $data['no_bukti'] = $no_bukti;
                $this->load->view('v_form', $data);
                // $data['data_input'] = $get_filter;
                // $this->load->view('v_data_detail', $data); // Panggil fungsi view_data_detail yang ada di inputModel
            } else {
                $get_filter = $this->input_model->view_all();
            }
        
        }
    }
    Public function __construct()
    {
        parent::__construct();
        $this->load->model('input_model');
    }
    
    public function indexx()
    {
        $data['data_input']=$this->input_model->getdata();
        $this->load->view('template/header');
        $this->load->view('v_input1', $data);
        $this->load->view('template/footer');
    }

      public function indexx1()
    {
        $data['data_input']=$this->input_model->getdata();
        $this->load->view('template/header');
        $this->load->view('v_input3', $data);
        $this->load->view('template/footer');
    }


    public function savedatabank()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti_cek', 'bukti_cek', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $masuk=$this->input_model->savedata();
            if($masuk==true){
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data berhasil ditambahkan</div>');
            }
            else {
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data gagal ditambahkan</div>');
            }
            
            redirect(base_url('input/indexx'),'refresh');
            
        } 
        else {
            $this->session->flashdata('pesan', validation_errors());
            redirect(base_url('input/indexx'),'refresh');
        }
    }

    
    public function hapus_data($id_pengeluaran)
    {
        $proses_hapus= $this->input_model->hapusdata($id_pengeluaran);
        if ($proses_hapus== TRUE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">berhasil hapus data</div>');
            
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }
        
        redirect(base_url('input/indexx'),'refresh');
        
    }
    
    public function edit_pengeluaran()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti_cek', 'bukti_cek', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">'.validation_errors().'</div>');
			redirect(base_url('input'),'refresh');
		} else {
			$this->load->model('input_model');
			$proses_update=$this->input_model->update_pengeluaran();
			if($proses_update==true){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">sukses update sam</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
			}
			redirect(base_url('input/indexx'),'refresh');
		}
    }

    public function form1($id_pengeluaran='')
    {
        $this->load->model('input_model','input_m');
        $data['form']=$this->input_m->get_form($id_pengeluaran);
        $this->load->view('v_form1', $data);
    }

    public function pengajuan()
    {
        $data['pengajuan_input']=$this->input_model->get_pengajuan();
        $this->load->view('template/header');
        $this->load->view('v_pengajuan_uang',$data);
        $this->load->view('template/footer');
    }
     public function pengajuan1()
    {
        $data['pengajuan_input']=$this->input_model->get_pengajuan();
        $this->load->view('template/header');
        $this->load->view('v_pengajuan_uang1',$data);
        $this->load->view('template/footer');
    }

    public function savepengajuan()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti', 'bukti', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $masuk=$this->input_model->pengajuan_data();
            if($masuk==true){
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data berhasil ditambahkan</div>');
            }
            else {
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data gagal ditambahkan</div>');
            }
            
            redirect(base_url('input/pengajuan'),'refresh');
            
        } 
        else {
            $this->session->flashdata('pesan', validation_errors());
            redirect(base_url('input/pengajuan'),'refresh');
        }
    }

    public function hapus_pengajuan($id_pengajuan)
    {
        $proses_hapus= $this->input_model->hapus_pengajuan($id_pengajuan);
        if ($proses_hapus== TRUE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">berhasil hapus data</div>');
            
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }
        
        redirect(base_url('input/pengajuan'),'refresh');
        
    }

    public function get_pengajuan($id_pengajuan='')
    {
        $this->load->model('input_model','input_m');
        $data['pengajuan_data']=$this->input_m->get_pengajuan_data($id_pengajuan);
        $this->load->view('v_pengajuan', $data);
    }

    public function update_pengajuan()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti', 'bukti', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">'.validation_errors().'</div>');
			redirect(base_url('input/pengajuan'),'refresh');
		} else {
			$this->load->model('input_model');
			$proses_update=$this->input_model->update_pengajuan();
			if($proses_update==true){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">sukses update sam</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
			}
			redirect(base_url('input/pengajuan'),'refresh');
		}
    }
 
    public function pertanggungan()
    {
        $data['pertanggungan_input']=$this->input_model->get_pertanggungan();
        $this->load->view('template/header');
        $this->load->view('v_pertanggungan_uang',$data);
        $this->load->view('template/footer');
    }
    public function pertanggungan1()
    {
        $data['pertanggungan_input']=$this->input_model->get_pertanggungan();
        $this->load->view('template/header');
        $this->load->view('v_pertanggungan_uang1',$data);
        $this->load->view('template/footer');
    }

    public function savepertanggungan()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti_cek', 'bukti_cek', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $masuk=$this->input_model->pertanggungan();
            if($masuk==true){
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data berhasil ditambahkan</div>');
            }
            else {
                $this->session->flashdata('pesan', '<div class="alert alert-succes">Data gagal ditambahkan</div>');
            }
            
            redirect(base_url('input/pertanggungan'),'refresh');
            
        } 
        else {
            $this->session->flashdata('pesan', validation_errors());
            redirect(base_url('input/pertanggungan'),'refresh');
        }
    }

    public function hapus_pertanggungan($id_pertanggungan)
    {
        $proses_hapus= $this->input_model->hapus_pertanggungan($id_pertanggungan);
        if ($proses_hapus== TRUE) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">berhasil hapus data</div>');
            
        } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
        }

        redirect(base_url('input/pertanggungan'),'refresh');
        
    }

    public function get_pertanggungan($id_pertanggungan='')
    {
        $this->load->model('input_model','input_m');
        $data['pertanggungan_data']=$this->input_m->get_pertanggungan_data($id_pertanggungan);
        $this->load->view('v_uangmuka', $data);
    }

    public function update_pertanggungan()
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('bukti_cek', 'bukti_cek', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required', array('required' => '%s harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">'.validation_errors().'</div>');
			redirect(base_url('input/pertanggungan'),'refresh');
		} else {
			$this->load->model('input_model');
			$proses_update=$this->input_model->update_pertanggungan();
			if($proses_update==true){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">sukses update sam</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">coba lagi sam</div>');
			}
			redirect(base_url('input/pertanggungan'),'refresh');
		}
    }

    public function jumlah($k_saldo='')
    {
        $this->load->model('input_model');
        $data['jumlah']=$this->input_model->jumlah($k_saldo);
        $data['tambah']=$this->input_model->tambah($k_saldo);
        $this->load->view('v_jumlah', $data, FALSE);
        
    }

} 