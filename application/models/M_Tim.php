<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Tim extends CI_Model {
	public function tampil_tim()
	{
		$this->db->order_by('id','ASC');
		return $this->db->get('tim')->result_array();
	}
}