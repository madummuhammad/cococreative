<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model {

	public function add_to_chart()
	{
		$product=$this->input->post('product');
		$size=$this->input->post('size');
		$qty=$this->input->post('qty');
		$data=[
			'product'=>$product,
			'size'=>$size*$qty,
			'qty'=>$qty
		];
		if ($this->session->userdata('dataorder')) {
			$array_lama=$this->session->userdata('dataorder');
			array_push($array_lama, $data);
			$this->session->set_userdata('dataorder',$array_lama);
		} else {
			$array=[$data];
			$this->session->set_userdata('dataorder',$array);
		}

	}
	public function sumChart()
	{
		$array=count($this->session->userdata('dataorder'));
		return $array;
	}
	// public function login()
	// {
	// 	$this->form_validation->set_rules('username','Username','trim|required');
	// 	$this->form_validation->set_rules('password','Password','trim|required');
	// 	if ($this->form_validation->run()==false) {
	// 		$this->load->view('Admin/login.php');
	// 		$this->load->view('Admin/footer.php');
	// 	} else {
	// 		$username=$this->input->post('username');
	// 		$password=$this->input->post('password');
	// 		$this->M_admin->login($username,$password);
	// 	}
	// }
}