<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Website extends CI_Model {
	public function tampil_carousel()
	{
		if (get_cookie('lang_is')=='in') {
			$result=$this->db->get('carousel')->result_array();

		}else{
			$this->db->join('carousel_eng','carousel.id=carousel_eng.id_carousel');
			$result=$this->db->get('carousel')->result_array();
		}
		return $result;
		
	}
	public function tampil_trust()
	{
		if (get_cookie('lang_is')=='in') {
			$result=$this->db->get('trust')->result_array();
		} else {
			$this->db->join('trust_eng','trust.id=trust_eng.id_trust');
			$result=$this->db->get('trust')->result_array();

		}
		
		return $result;
	}
	public function tampil_desproduk()
	{
		if (get_cookie('lang_is')=='in') {
			$result=$this->db->get('des_product')->result_array();
		} else {
			$this->db->join('des_product_eng','des_product.id=des_product_eng.id_des_product');
			$result=$this->db->get('des_product')->result_array();
		}
		
		return $result;
	}
	public function tampil_top_img($page)
	{
		if (get_cookie('lang_is')=='in') {
			$this->db->where('id',$page);
			$result=$this->db->get('top_img')->result_array();
		} else {
			$this->db->join('top_img_eng','top_img.id=top_img_eng.id_top_img');
			$this->db->where('top_img.id',$page);
			$result=$this->db->get('top_img')->result_array();
		}
		
		return $result;
	}
	public function tampil_about()
	{
		if (get_cookie('lang_is')=='in') {
			$result=$this->db->get('about')->result_array();
		} else {
			$this->db->join('about_eng','about.id=about_eng.id_about');
			$result=$this->db->get('about')->result_array();
		}
		
		return $result;
	}
	public function tampil_link()
	{
		$result=$this->db->get('link_video')->row_array();
		return $result;
	}
	public function tampil_testimonial()
	{
		if (get_cookie('lang_is')=='in') {
			$result=$this->db->get('testimonial')->result_array();

		}else{
			$this->db->join('testimonial_eng','testimonial.id_testimoni=testimonial_eng.id_testimoni');
			$result=$this->db->get('testimonial')->result_array();
		}
		return $result;
	}
	// Tampil Footer Deskripsi
	public function tampil_footer_deskripsi()
	{
		$this->db->join('footer_deskripsi_eng','footer_deskripsi.id_footer_deskripsi=footer_deskripsi_eng.id_footer_deskripsi');
		$result=$this->db->get('footer_deskripsi')->row_array();
		return $result;
	}

	public function tampil_logo_bisnis_footer()
	{
		$result=$this->db->get('logo_bisnis_footer')->result_array();
		return $result;
	}
// 
}