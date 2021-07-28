<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Berita'];
		$data['berita']=$this->M_Berita->tampil_berita();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/berita/v_berita',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function tambah_berita()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Berita','Tambah Berita'];
		$data['title']='Tambah Berita';
		$data['berita']=$this->M_Berita->tampil_berita();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/berita/v_tambah_berita',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function edit_berita()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['breadcrumb']=['Dasboard','Berita','Edit Berita'];
		$data['title']='Tambah Berita';
		$data['berita']=$this->M_Berita->tampil_edit_berita();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/berita/v_edit_berita',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function p_tambah_berita()
	{
		$this->M_Berita->tambah_berita();
	}

	public function p_edit_berita()
	{
		$this->M_Berita->edit_berita();
	}

	public function hapus_berita()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_news',$id);
		$this->db->delete('news');
		redirect('berita');
	}
}