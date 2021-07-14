<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pesan extends CI_Model {

	public function login()
	{
		$url=$this->input->post('url');
		$no_hp=$this->input->post('nohp');

		$data=[
			'no_hp'=>$no_hp
		];
		$this->session->set_userdata($data);
		$this->db->insert('pengirim',$data);
		redirect($url);
	}
	public function kirim_pesan()
	{
		$pesan=$this->input->post('pesan');
		$no_hp=$this->session->userdata('no_hp');
		$this->db->where('no_hp',$no_hp);
		$id=$this->db->get('pengirim')->row_array();
		$data=[
			'id_pengirim'=>$id['id'],
			'isi_pesan'=>$pesan,
			'time'=>time(),
			'id_grup_pesan'=>0,
			'pengirim'=>1
		];
		$this->db->insert('pesan',$data);
	}
	public function tampil_pesan()
	{
		$no_hp=$this->session->userdata('no_hp');
		$this->db->where('no_hp',$no_hp);
		$id=$this->db->get('pengirim')->row_array();

		
		$this->db->where('id_pengirim',$id['id']);
		$result=$this->db->get('pesan')->result_array();
		return $result;
	}
}