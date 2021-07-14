<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['carousel']=$this->M_Website->tampil_carousel();
		$data['trust']=$this->M_Website->tampil_trust();
		$data['about']=$this->M_Website->tampil_about();
		$data['desproduk']=$this->M_Website->tampil_desproduk();
		$data['top_img']=$this->M_Website->tampil_top_img(1);
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$this->load->view('tampilan_website/partial/header');
		$this->load->view('tampilan_website/partial/mainNav');
		$this->load->view('tampilan_website/v_home',$data);
		$this->load->view('tampilan_website/partial/modal',$data);
		$this->load->view('tampilan_website/partial/footer');
	}
	public function about()
	{
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$data['carousel']=$this->M_Website->tampil_carousel();
		$data['trust']=$this->M_Website->tampil_trust();
		$data['desproduk']=$this->M_Website->tampil_desproduk();
		$data['top_img']=$this->M_Website->tampil_top_img(1);
		$data['about']=$this->M_Website->tampil_about();
		$this->load->view('tampilan_website/partial/header');
		$this->load->view('tampilan_website/partial/mainNav');
		$this->load->view('tampilan_website/partial/top_image',$data);
		$this->load->view('tampilan_website/v_about');
		$this->load->view('tampilan_website/partial/modal',$data);
		$this->load->view('tampilan_website/partial/footer');
	}
	public function produk()
	{
		$page='produk';
		$data['about']=$this->M_Website->tampil_about();
		$data['carousel']=$this->M_Website->tampil_carousel();
		$data['trust']=$this->M_Website->tampil_trust();
		$data['desproduk']=$this->M_Website->tampil_desproduk();
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$this->load->view('tampilan_website/partial/header');
		$this->load->view('tampilan_website/partial/mainNav');
		$data['top_img']=$this->M_Website->tampil_top_img(3);
		$this->load->view('tampilan_website/partial/top_image',$data);
		$this->load->view('tampilan_website/v_product',$data);
		$this->load->view('tampilan_website/partial/modal',$data);
		$this->load->view('tampilan_website/partial/modal');
		$this->load->view('tampilan_website/partial/footer');
	}
	public function testimonial()
	{
		$page='testiomonial';
		$data['carousel']=$this->M_Website->tampil_carousel();
		$data['trust']=$this->M_Website->tampil_trust();
		$data['about']=$this->M_Website->tampil_about();
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$data['desproduk']=$this->M_Website->tampil_desproduk();
		$this->load->view('tampilan_website/partial/header');
		$this->load->view('tampilan_website/partial/mainNav');
		$data['top_img']=$this->M_Website->tampil_top_img(2);
		$this->load->view('tampilan_website/partial/top_image',$data);
		$this->load->view('tampilan_website/v_news');
		$this->load->view('tampilan_website/partial/modal',$data);
		$this->load->view('tampilan_website/partial/footer');
	}
	public function edit_carousel()
	{
		$this->M_Website->edit_carousel();
	}
	public function tambah_carousel()
	{
		$this->M_Website->tambah_carousel();
	}
	public function hapus_carousel()
	{
		$this->M_Website->hapus_carousel();
	}

	public function tambah_trust()
	{
		$this->M_Website->tambah_trust();
	}
	public function edit_trust()
	{
		$this->M_Website->edit_trust();
	}
	public function hapus_trust()
	{
		$this->M_Website->hapus_trust();
	}

	public function edit_desproduk()
	{
		$this->M_Website->edit_desproduk();
	}
	public function hapus_desproduk()
	{
		$this->M_Website->hapus_desproduk();
	}

	public function edit_topimage()
	{
		$this->M_Website->edit_topimage();
	}

	public function edit_about()
	{
		$this->M_Website->edit_about();
	}
}