<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$this->M_Pesan->ubah_new_pesan();
		$data['user']=$this->M_Admin->tampil_profil();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/pesan/v_pesan');
		$this->load->view('admin/partial/footer');
	}
	// public function session_isi_pesan()
	// {
	// 	$id_pengirim_pesan=$this->uri->segment(3);
	// 	$data=[
	// 		'id_pengirim_pesan'=>$id_pengirim_pesan
	// 	];
	// 	$this->session->set_userdata($data);
	// }

	public function tampilpesan()
	{
		$pesan=$this->input->post('pesan');
		if ($pesan) {
			$this->M_Pesan->kirimpesan();
			$data['pengirim_pesan']=$this->M_Pesan->tampil_pengirim_pesan_klik();
			$data['isi_pesan']=$this->M_Pesan->tampil_isi_pesan();
			$this->load->view('admin/pesan/v_isi_pesan',$data);
		} else {
			$data['pengirim_pesan']=$this->M_Pesan->tampil_pengirim_pesan_klik();
			$data['isi_pesan']=$this->M_Pesan->tampil_isi_pesan();
			$this->load->view('admin/pesan/v_isi_pesan',$data);
		}

	}

	public function tampil_pengirim_pesan()
	{
		$data['pengirim_pesan']=$this->M_Pesan->tampil_pengirim_pesan();
		$this->load->view('admin/pesan/v_pengirim_pesan',$data);
	}

	public function tampil_pusat_pesan()
	{
		$data['pengirim']=$this->M_Pesan->tampil_pusat_pesan();
		$this->load->view('admin/partial/v_pusat_pesan',$data);
	}
	public function jumlah_pesan()
	{
		$data['jml_pesan']=$this->M_Pesan->jumlah_pesan();
		$this->load->view('admin/partial/v_jumlah_pesan',$data);
	}
}