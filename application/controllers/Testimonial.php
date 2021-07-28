<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        pengunjung();
        
    }


    public function index()
    {
        $this->load->view('news/partial/header');
        $this->load->view('news/v_news');
        $this->load->view('news/partial/footer');
    }
}