<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        pengunjung();
        
    }


    public function index()
    {
        $data['berita_sorotan']=$this->M_Berita->tampil_sorotan_berita();
        $data['berita_terbaru']=$this->M_Berita->tampil_berita_terbaru();
        $data['berita_lain']=$this->M_Berita->tampil_berita_lain();
        $this->load->view('news/partial/header');
        $this->load->view('news/partial/mainHeader');
        $this->load->view('news/v_news',$data);
        $this->load->view('news/partial/footer');
    }

    public function cococreative_news()
    {
        $data['berita_sorotan']=$this->M_Berita->tampil_sorotan_berita();
        $data['berita_terbaru']=$this->M_Berita->tampil_berita_terbaru();
        $data['berita_lain']=$this->M_Berita->tampil_berita_lain();
        $data['isi_berita']=$this->M_Berita->tampil_isi_berita($this->uri->segment(3));
        $this->load->view('news/partial/header');
        $this->load->view('news/partial/mainHeader');
        $this->load->view('news/v_isi_news',$data);
        $this->load->view('news/partial/footer');
    }
}