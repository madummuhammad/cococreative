<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {
	function __construct()
	{
		parent::__construct();
            pengunjung();
        
	}
    public function index()
    {
        $data['tim']=$this->M_Tim->tampil_tim();
    	$this->load->view('company_profile/partial/header');
    	$this->load->view('company_profile/partial/mainNav');
        $this->load->view('company_profile/v_teams',$data);
        $this->load->view('company_profile/partial/footer');
    }
}