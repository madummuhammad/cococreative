<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
            pengunjung();
        
	}
    public function index()
    {
        $data['carousel']=$this->M_Website->tampil_carousel();
        $data['trust']=$this->M_Website->tampil_trust();
        $data['desproduk']=$this->M_Website->tampil_desproduk();
    	$this->load->view('company_profile/partial/header');
    	$this->load->view('company_profile/partial/preloader');
    	$this->load->view('company_profile/partial/mainNav');
        $this->load->view('company_profile/v_home',$data);
        $this->load->view('company_profile/partial/footer');
    }
}