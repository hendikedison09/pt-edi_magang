<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Input extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index_post()
    {
        $this->form_validation->set_rules('no_urut', 'No_Urut', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl', 'Tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('no_bukti', 'No_bukti', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('saldo_awal', 'saldo_awal', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required',array('required' => 'Data Harus lengkap!'));
        
        $saldo_awal = $this->input->post('saldo_awal');
        $jumlah = $this->input->post('jumlah');
        $kas = $saldo_awal - $jumlah;

        $dataYangDiInput = array(
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

        // for ($index = 1; $index < $_POST['no_urut'];){
        //     array_push($dataYangDiInput, array(
        //         'no_urut'=>$nomorurut,
        //         'tgl'=>$tgl[$index],
        //         'no_bukti'=>$no_bukti[$index],  // Ambil dan set data nama sesuai index array dari $index
        //         'kegiatan'=>$kegiatan[$index],  // Ambil dan set data telepon sesuai index array dari $index
        //         'saldo_awal'=>$saldo_awal[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //         'jumlah'=>$jumlah[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //     ));
        //     $index++;
        // }
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('input_model','input_m');
            $masuk=$this->input_m->masuk_db($dataYangDiInput);
            if($masuk==true){
                $this->response([
                    'status' => true,
                    'message' => 'berhasil tambah data',
                    'data' => $dataYangDiInput
                ], REST_Controller::HTTP_OK);
            }
            else{
                $this->response([
                    'status' => false,
                    'message' => 'gagal tambah data',
                    'data' => $dataYangDiInput
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
            
            redirect(base_url('input'),'refresh');
            
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal tambah data',
                'data' => $dataYangDiInput
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function saldo_post()
    {
        $this->form_validation->set_rules('no_urut', 'No_Urut', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl', 'Tgl', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('saldo_awal', 'saldo_awal', 'trim|required', array('required' => '%s harus diisi'));

        $saldo_awal = $this->input->post('saldo_awal');
        $jumlah = $this->input->post('jumlah');
        $kas = $saldo_awal - $jumlah;

        $saldoYangDiInput = array(
            'no_urut'=>$this->input->post('no_urut'),
            'k_saldo' =>$this->input->post('k_saldo'),
            'tgl' =>$this->input->post('tgl'),
            'kegiatan' =>$this->input->post('kegiatan'),
            'saldo_awal' =>$this->input->post('saldo_awal'),
            'saldo_kas_kecil'=> $kas
        );

        // for ($index = 1; $index < $_POST['no_urut'];){
        //     array_push($dataYangDiInput, array(
        //         'no_urut'=>$nomorurut,
        //         'tgl'=>$tgl[$index],
        //         'no_bukti'=>$no_bukti[$index],  // Ambil dan set data nama sesuai index array dari $index
        //         'kegiatan'=>$kegiatan[$index],  // Ambil dan set data telepon sesuai index array dari $index
        //         'saldo_awal'=>$saldo_awal[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //         'jumlah'=>$jumlah[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //     ));
        //     $index++;
        // }
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('input_model','input_m');
            $masuk=$this->input_m->masuk_saldo($saldoYangDiInput);
            if($masuk==true){
                $this->response([
                    'status' => true,
                    'message' => 'berhasil tambah saldo',
                    'data' => $saldoYangDiInput
                ], REST_Controller::HTTP_OK);
            }
            else{
                $this->response([
                    'status' => false,
                    'message' => 'gagal tambah saldo',
                    'data' => $saldoYangDiInput
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
            
            redirect(base_url('input'),'refresh');
            
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal tambah saldo',
                'data' => $saldoYangDiInput
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}