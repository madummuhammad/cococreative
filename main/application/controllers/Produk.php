<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Produk'];
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/produk/v_produk',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}
	public function variasi_produk()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Produk','Variasi Produk'];
		$data['title']='Data Variasi Produk';
		$data['variasi_produk']=$this->M_Produk->tampil_variasi_produk();
		$data['nama_jenis_produk']=$this->M_Produk->tampil_jenis_produk_variasi();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/produk/v_variasi_produk',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function tambah_produk()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Produk','Tambah Produk'];
		$data['title']='Tambah Produk';
		$data['variasi_produk']=$this->M_Produk->tampil_variasi_produk();
		$data['nama_jenis_produk']=$this->M_Produk->tampil_jenis_produk_variasi();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/produk/v_tambah_produk',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function edit_produk()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Produk','Edit Produk'];
		$data['title']='Edit Produk';
		$data['edit_produk']=$this->M_Produk->tampil_edit_produk();
		$data['variasi_produk']=$this->M_Produk->tampil_variasi_produk();
		$data['nama_jenis_produk']=$this->M_Produk->tampil_jenis_produk_variasi();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/produk/v_edit_produk',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function bahasa_produk()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Produk','Bahasa Produk'];
		$data['title']='Bahasa Produk';
		$data['edit_produk']=$this->M_Produk->tampil_edit_produk();
		$data['variasi_produk']=$this->M_Produk->tampil_variasi_produk();
		$data['nama_jenis_produk']=$this->M_Produk->tampil_jenis_produk_variasi();
		$data['bahasa_produk']=$this->M_Produk->tampil_bahasa_produk();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/produk/v_bahasa_produk',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function tambahproduk()
	{
		$this->M_Produk->tambah_produk();
	}
	public function p_edit_produk()
	{
		$this->M_Produk->edit_produk();
	}
	public function p_bahasa_produk()
	{
		$this->M_Produk->bahasa_produk();
	}
	public function p_edit_bahasa_produk()
	{
		$this->M_Produk->edit_bahasa_produk();
	}
	public function tambah_variasi_produk()
	{
		$this->M_Produk->tambah_variasi_produk();
	}
	public function edit_variasi_produk()
	{
		$this->M_Produk->edit_variasi_produk();
	}
	public function ubah_view_more()
	{
		$this->M_Produk->ubah_view_more();
	}
	public function hapus_produk()
	{
		$this->M_Produk->hapus_produk();
		
	}
	public function hapus_variasi_produk()
	{
		$this->M_Produk->hapus_variasi_produk();
	}
}