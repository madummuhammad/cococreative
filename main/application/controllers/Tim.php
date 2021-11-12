<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user']=$this->M_Admin->tampil_profil();
		$data['tim']=$this->M_Tim->tampil_tim();
		$data['is_leader']=$this->M_Tim->num_rows();
		$data['breadcrumb']=['Dasboard','Tim'];
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/sidebar');
		$this->load->view('admin/partial/topbar',$data);
		$this->load->view('admin/partial/breadcrumb',$data);
		$this->load->view('admin/v_tim',$data);
		$this->load->view('admin/partial/modal');
		$this->load->view('admin/partial/footer');
	}

	public function tambah()
	{
		$this->M_Tim->tambah();
	}

	public function hapus()
	{
		$this->M_Tim->hapus();
	}

	public function edit()
	{
		$this->M_Tim->edit();
	}
}