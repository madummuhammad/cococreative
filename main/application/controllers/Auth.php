<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

	}

	public function login()
	{
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
		$this->load->view('admin/partial/header');
		$this->load->view('admin/v_login');
	}
	public function p_login()
	{
		$this->M_Auth->p_login();
	}
	public function ubah_password()
	{
		$this->M_Auth->ubah_password();
	}
	public function logout()
	{
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Anda Logout!!
			</div>');
		session_unset();
		redirect();
	}
}