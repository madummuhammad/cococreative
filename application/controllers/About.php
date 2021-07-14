<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
		parent::__construct();

			pengunjung();

	}


	public function index()
	{
		$data['about']=$this->M_Website->tampil_about();
		$data['top_img']=$this->M_Website->tampil_top_img(1);
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/partial/top_image',$data);
		$this->load->view('company_profile/v_about',$data);
		$this->load->view('company_profile/partial/footer');
	}
}