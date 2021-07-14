<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		pengunjung();
		
	}
	public function index()
	{
		$data['top_img']=$this->M_Website->tampil_top_img(3);
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/partial/top_image',$data);
		$this->load->view('company_profile/v_product',$data);
		$this->load->view('company_profile/partial/modal',$data);
		$this->load->view('company_profile/partial/footer');
	}
	public function view_more()
	{
		
		$data['view_more']=$this->M_Produk->view_more();
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/product/v_more',$data);
		$this->load->view('company_profile/partial/modal_view_more',$data);
		$this->load->view('company_profile/partial/footer');
	}
	public function cocopot()
	{
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/product/v_cocopot');
		$this->load->view('company_profile/partial/modal');
		$this->load->view('company_profile/partial/footer');
	}
	public function cocofiber()
	{
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/product/v_cocofiber');
		$this->load->view('company_profile/partial/footer');
	}
	public function cocopeat()
	{
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/product/v_cocopeat');
		$this->load->view('company_profile/partial/footer');
	}
	public function chart()
	{
		$this->load->view('company_profile/partial/header');
		$this->load->view('company_profile/partial/preloader');
		$this->load->view('company_profile/partial/mainNav');
		$this->load->view('company_profile/product/v_chart');
		$this->load->view('company_profile/partial/footer');
	}
}