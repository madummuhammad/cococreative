<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model {

	public function tampil_jenis_produk()
	{
		if (get_cookie('lang_is')=='in') {
			$this->db->order_by('urutan','ASC');
			$result=$this->db->get('jenis_produk')->result_array();
			return $result;
		} else{
			$this->db->order_by('urutan','ASC');
			$this->db->join('jenis_produk_eng','jenis_produk.id_jenis_produk=jenis_produk_eng.id_jenis_produk');
			$result=$this->db->get('jenis_produk')->result_array();
			return $result;
		}
		
	}
	public function tampil_parameter_ukuran($id)
	{
		if (get_cookie('lang_is')=='in') {
			$this->db->join('variasi_produk','parameter_ukuran.id_parameter_ukuran=variasi_produk.id_parameter_ukuran');
			$this->db->where('variasi_produk.id_jenis_produk',$id);
			$result=$this->db->get('parameter_ukuran')->result_array();
			return $result;
		} else {
			$this->db->join('parameter_ukuran_eng','parameter_ukuran.id_parameter_ukuran=parameter_ukuran_eng.id_parameter_ukuran');
			$this->db->join('variasi_produk','parameter_ukuran.id_parameter_ukuran=variasi_produk.id_parameter_ukuran');
			$this->db->where('variasi_produk.id_jenis_produk',$id);
			$result=$this->db->get('parameter_ukuran')->result_array();
			return $result;
		}
	}

	public function view_more()
	{
		$id=$this->uri->segment(3);
		// $this->db->distinct();
		if (get_cookie('lang_is')=='in') {
			$this->db->join('jenis_produk','variasi_produk.id_jenis_produk=jenis_produk.id_jenis_produk');

			$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');

			$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');

			$this->db->where('variasi_produk.id_jenis_produk',$id);
			$result=$this->db->get('variasi_produk')->result_array();
			return $result;
		} else {

			$this->db->join('jenis_produk','variasi_produk.id_jenis_produk=jenis_produk.id_jenis_produk');

			$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');
			
			$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');
			$this->db->join('pilihan_ukuran_eng','pilihan_ukuran.id_pilihan_ukuran=pilihan_ukuran_eng.id_pilihan_ukuran');
			$this->db->where('variasi_produk.id_jenis_produk',$id);
			$result=$this->db->get('variasi_produk')->result_array();
			return $result;
		}
	}

	public function tampil_top_img_view_more()
	{
		$id_jenis_produk=$this->uri->segment(3);
		$this->db->where('id_jenis_produk',$id_jenis_produk);
		$result=$this->db->get('jenis_produk')->row_array();
		return $result;
	}

	public function ukuran($id)
	{
		$this->db->join('parameter_ukuran','pilihan_ukuran.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');
		$this->db->join('variasi_produk','parameter_ukuran.id_parameter_ukuran=variasi_produk.id_parameter_ukuran');
		$this->db->where('variasi_produk.id_jenis_produk',$id);
		$result=$this->db->get('pilihan_ukuran')->result_array();
		return $result;
	}


}