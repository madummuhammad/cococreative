<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model {
	public function tampil_sorotan_berita()
	{
		$this->db->where('favorite',1);
		$result=$this->db->get('news')->row_array();
		return $result;
	}

	public function tampil_berita_terbaru()
	{
		$this->db->order_by('time','ASC');
		$this->db->limit('3');
		$result=$this->db->get('news')->result_array();
		return $result;
	}

	public function tampil_berita_lain()
	{
		$this->db->order_by('time','ASC');
		$this->db->limit(3,3);
		$result=$this->db->get('news')->result_array();
		return $result;
	}
	

}