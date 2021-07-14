<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Auth extends CI_Model {
	
	public function p_login()
	{
		$email=$this->input->post('email');
		$user=$this->db->get_where('tb_admin',['email'=>$email])->row_array();
		$password=$this->input->post('password');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$row=$this->db->get('tb_admin')->num_rows();
		$validasi=$this->form_validation->set_rules($this->rules_login());
		$data=[
			'email'=>$email
		];

		if ($validasi->run()==false) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Form Harus Terisi Semua!!
				</div>');
			redirect();
		} else {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata($user);
				redirect('admin');
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Password Anda Salah!!
					</div>');
				redirect();
			}
		}

	}

	public function gantipassword()
	{
		$passwordlama=$this->input->post('passwordlama');
		$passwordbaru=$this->input->post('password1');
		$email=$this->session->userdata('email');
		$user=$this->db->get_where('tb_admin',['email'=>$email])->row_array();

		$validasi=$this->form_validation->set_rules($this->rules_cpassword());
		if ($validasi->run()==false) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Password Gagal Di Rubah Karena ada kesalahan yang anda lakukan!!
				</div>');
			redirect('admin/gantipassword');
		} else {

			if ($user['password']==$passwordlama) {
				$hash=password_hash($passwordbaru, PASSWORD_DEFAULT);
				$data=[
					'password'=>$hash
				];
				$this->db->where('email',$email);
				$this->db->update('tb_admin',$data);
				$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
					Password Berhasil Di Ubah!!
					</div>');
				redirect('admin/gantipassword');
			} else {
				if (password_verify($passwordlama, $user['password'])) {
					$hash=password_hash($passwordbaru, PASSWORD_DEFAULT);
					$data=[
						'password'=>$hash
					];
					$this->db->where('email',$email);
					$this->db->update('tb_admin',$data);
					$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
						Password Berhasil Di Ubah!!
						</div>');
					redirect('admin/gantipassword');
				}
			}
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Password Gagal Di Rubah Karena ada kesalahan yang anda lakukan!!
				</div>');
			redirect('admin/gantipassword');

		}
	}

	private function rules_login()
	{
		return [
			['field' => 'email',
			'rules' => 'trim|required|valid_email',
			'label' => 'Email',
			'errors'=>[
				'required'=>'Email Tidak Boleh Kosong',
			]
		],

		['field' => 'password',
		'rules' => 'trim|required',
		'label'=>'Password',
		'errors'=>[
			'required'=>'Password Kosong'
		]
	],
];
}

private function rules_cpassword()
{
	return [
		['field' => 'passwordlama',
		'rules' => 'trim|required',
		'label' => 'Email',
		'errors'=>[
			'required'=>'Password Tidak Boleh Kosong',
		]
	],

	['field' => 'password1',
	'rules' => 'trim|required',
	'label'=>'Password',
	'errors'=>[
		'required'=>'Password Harus Sama'
	]
],

['field' => 'password2',
'rules' => 'trim|required|matches[password1]|min_length[3]',
'label'=>'Password',
'errors'=>[
	'required'=>'Password Harus Sama'
]
],
];
}
}