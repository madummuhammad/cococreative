<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pengunjung extends CI_Model {
	
	public function pengunjung_bulan_ini()
	{
		$bulankemarin=date('m')-1;
		$bulandepan=date('m')+1;
		$tahunini=date('Y');
		$bulankemarinkode=mktime(0,0,0,$bulankemarin,1,$tahunini);
		$bulandepankode=mktime(0,0,0,$bulandepan,1,$tahunini);
		$this->db->where('time>',$bulankemarinkode);
		$this->db->where('time<',$bulandepankode);
		$result=$this->db->get('pengunjung')->num_rows();
		return $result;
	}
	public function pengunjung_perbulan($bulan)
	{
		$bulanya=$bulan;
		$bulandepan=$bulan+1;
		$tahunini=date('Y');
		$bulankemarinkode=mktime(0,0,0,$bulanya,1,$tahunini);
		$bulandepankode=mktime(0,0,0,$bulandepan,1,$tahunini);
		$this->db->where('time>',$bulankemarinkode);
		$this->db->where('time<',$bulandepankode);
		$result=$this->db->get('pengunjung')->num_rows();
		return $result;
	}

	public function pengunjung_tahun_ini()
	{
		
	}

}