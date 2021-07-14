<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pesan extends CI_Model {

	public function tampil_isi_pesan()
	{
		$id_pengirim=$this->uri->segment(3);
		$id_grup_pesan=$this->session->userdata('id_group_pesan');
		$this->db->where('id_grup_pesan=>0' OR 'id_grup_pesan',$id_grup_pesan);
		$this->db->where('id_pengirim',$id_pengirim);
		$result=$this->db->get('pesan')->result_array();
		return $result;
	}

	public function tampil_pengirim_pesan_klik()
	{
		$id_pengirim=$this->uri->segment(3);
		$this->db->where('id',$id_pengirim);
		$result=$this->db->get('pengirim')->row_array();
		return $result;
	}
	public function tampil_pengirim_pesan()
	{
		$result=$this->db->get('pengirim')->result_array();
		return $result;
	}

	public function kirimpesan()
	{
		$id_pengirim=$this->input->post('id_pengirim');
		$isi_pesan=$this->input->post('pesan');
		$id_grup_pesan=$this->session->userdata('id_group_pesan');
		$data=[
			'id_pengirim'=>$id_pengirim,
			'isi_pesan'=>$isi_pesan,
			'time'=>time(),
			'id_grup_pesan'=>$id_grup_pesan,
			'pengirim'=>2,
			'new'=>0
		];
		$this->db->insert('pesan',$data);
	}
	public function tampil_pusat_pesan()
	{
		$this->db->join('pengirim','pesan.id_pengirim=pengirim.id');
		$this->db->where('pengirim',1);
		$this->db->where('pesan.new',0);
		$result=$this->db->get('pesan')->result_array();
		return $result;
	}
	public function jumlah_pesan()
	{
		$id_grup_pesan=$this->session->userdata('id_group_pesan');
		$this->db->join('pengirim','pesan.id_pengirim=pengirim.id');
		$this->db->where('pengirim',1);
		$this->db->where('id_grup_pesan=>0' OR 'id_grup_pesan',$id_grup_pesan);
		$this->db->where('pesan.new',0);
		$result=$this->db->get('pesan')->num_rows();
		return $result;
	}
	public function ubah_new_pesan()
	{
		$id_pengirim=$this->uri->segment(3);
		$data=[
			'new'=>1
		];

		$this->db->where('id_pengirim',$id_pengirim);
		$this->db->update('pesan',$data);
	}
}