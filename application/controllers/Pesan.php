<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		pengunjung();
		
	}

	public function index()
	{
		echo "Forbidden";
	}

	public function tampil_pesan()
	{
		if ($this->input->post('pesan')) {
			$this->M_Pesan->kirim_pesan();
			$data['pesan']=$this->M_Pesan->tampil_pesan();
			$this->load->view('company_profile/v_pesan',$data);
		} else {
			$data['pesan']=$this->M_Pesan->tampil_pesan();
			$this->load->view('company_profile/v_pesan',$data);
		}
		
	}
	public function login()
	{
		$this->M_Pesan->login();
	}
	
}