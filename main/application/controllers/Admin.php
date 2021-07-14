<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/v_admin');
		$this->load->view('admin/partial/footer');
	}
	public function profile()
	{
		$data['title']='Profil';
		$data['user']=$this->M_Admin->tampil_profil();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/v_profile',$data);
		$this->load->view('admin/partial/footer');
	}
	public function gantipassword()
	{
		$data['title']='Ganti Password';
		$data['user']=$this->M_Admin->tampil_profil();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/v_changepassword',$data);
		$this->load->view('admin/partial/footer');
	}
	public function pgantipassword()
	{
		$this->M_Auth->gantipassword();
	}
	public function user()
	{
		$data['title']='User';
		$data['user']=$this->M_Admin->tampil_profil();
		$data['user_admin']=$this->M_Admin->tampil_user();
		$data['role_access']=$this->M_Admin->tampil_role_access();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/v_user',$data);
		$this->load->view('admin/partial/modal',$data);
		$this->load->view('admin/partial/footer');
	}
	public function tambah_user()
	{
		$this->M_Admin->tambah_user();
	}
	public function edit_user()
	{
		$this->M_Admin->edit_user();
	}
	public function hapus_user()
	{
		$this->M_Admin->hapus_user();
	}
	public function ganti_profil()
	{
		$this->M_Admin->ganti_profil();
	}
	public function ganti_access()
	{
		$this->M_Admin->ganti_access();
	}
}