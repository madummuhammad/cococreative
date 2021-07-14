<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Admin extends CI_Model {
	
	public function tampil_profil()
	{
		$email=$this->session->userdata('email');
		$this->db->where('email',$email);
		$result=$this->db->get('tb_admin')->row_array();
		return $result;
	}
	public function tampil_user()
	{
		$this->db->join('role_access','tb_admin.id_role_access=role_access.id');
		$result=$this->db->get('tb_admin')->result_array();
		return $result;
	}
	public function tampil_role_access()
	{
		$result=$this->db->get('role_access')->result_array();
		return $result;
	}
	public function tambah_user()
	{
		$nama=$this->input->post('nama_user');
		$email=$this->input->post('email');
		$gambar=$this->upload_profil()?:'default.png';
		$role_access=$this->input->post('role_access');
		$password=strtolower(str_replace(' ', '', $nama));
		$hash=password_hash($password, PASSWORD_DEFAULT);
		$validasi=$this->form_validation->set_rules($this->rules_user_admin());
		$data=[
			'nama'=>$nama,
			'email'=>$email,
			'gambar'=>$gambar,
			'password'=>$hash,
			'id_role_access'=>$role_access,
			'time'=>time()
		];
		if ($validasi->run()==false) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Nama, Email dan Hak Akses Tidak Boleh Kosong. Email tidak boleh sama dengan yang ada!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/user');
		} else {
			$this->db->insert('tb_admin',$data);
			redirect('admin/user');
		}

	}
	public function edit_user()
	{
		$id_user=$this->input->post('id_user');
		$nama=$this->input->post('nama_user');
		$email=$this->input->post('email');
		$gambar=$this->upload_profil();
		$role_access=$this->input->post('role_access');
		$password=strtolower(str_replace(' ', '', $nama));
		$hash=password_hash($password, PASSWORD_DEFAULT);
		$validasi=$this->form_validation->set_rules($this->rules_user_admin());
		if ($gambar!=NULL) {
			$data=[
				'nama'=>$nama,
				'email'=>$email,
				'gambar'=>$gambar,
				'password'=>$hash,
				'id_role_access'=>$role_access,
				'time'=>time()
			];
		} else {
			$data=[
				'nama'=>$nama,
				'email'=>$email,
				'password'=>$hash,
				'id_role_access'=>$role_access,
				'time'=>time()
			];
		}
		if ($validasi->run()==false) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Nama, Email dan Hak Akses Tidak Boleh Kosong. Email tidak boleh sama dengan yang ada!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/user');
		} else {

			$this->db->where('id_admin',$id_user);
			$this->db->update('tb_admin',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data Berhasil Di Edit!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/user');
		}
	}
	public function hapus_user()
	{
		$id_admin=$this->uri->segment(3);
		$this->db->where('id_admin',$id_admin);
		$this->db->delete('tb_admin');
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Data Berhasil Di Hapus!!
			</div>');
		$this->session->mark_as_temp('message',1);
		redirect('admin/user');
	}
	public function ganti_access()
	{
		$id_role_access=$this->input->post('role_access');
		$id_admin=$this->input->post('id_admin');
		$data=[
			'id_role_access'=>$id_role_access
		];
		if ($id_role_access==NULL) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Tidak ada yang diubah!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/user');
		} else {
			$this->db->where('id_admin',$id_admin);
			$this->db->update('tb_admin',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Access berhasil di ubah!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/user');
		}
	}

	public function ganti_profil()
	{
		$id_admin=$this->input->post('id_admin');
		$nama_profil=$this->input->post('nama_profil');
		$foto=$this->upload_profil()?:'default.png';

		$this->db->where('id_admin',$id_admin);
		$user=$this->db->get('tb_admin')->row_array();

		$gambar_lama=$user['gambar'];
		if ($nama_profil==NULL) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Nama Profil tidak boleh kosong!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/profile');
		} elseif ($foto=='default.png' AND $nama_profil!=NULL) {
			$data=[
				'nama'=>$nama_profil,
			];

			$this->db->where('id_admin',$id_admin);
			$this->db->update('tb_admin',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Nama Profil Berhasil Di Ubah!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/profile');
		} else {
			$data=[
				'nama'=>$nama_profil,
				'gambar'=>$foto
			];
			$this->db->where('id_admin',$id_admin);
			$this->db->update('tb_admin',$data);
			if ($gambar_lama!='default.png') {
				unlink(FCPATH . 'assets/assets/img/upload/profil/'.$gambar_lama);
			}
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Nama Profil dan Foto Berhasil di Ubah!!
				</div>');
			$this->session->mark_as_temp('message',1);
			redirect('admin/profile');
		}

	}

	private function upload_profil()
	{
		$config['upload_path']          = './assets/assets/img/upload/profil/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            ='foto_profil';
// $config['max_size']             = 100;
// $config['max_width']            = 1024;
// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}

	private function rules_user_admin()
	{
		return [
			['field' => 'nama_user',
			'rules' => 'trim|required',
			'label' => 'Nama User',
			'errors'=>[
				'required'=>'Nama User Belum Terisi',
			]
		],
		['field' => 'role_access',
		'rules' => 'trim|required',
		'label'=>'Role Access',
		'errors'=>[
			'required'=>'Role Access Tidak Boleh Kosong'
		]
	]
];
}
}