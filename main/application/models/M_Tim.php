<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Tim extends CI_Model {

	public function tampil_tim()
	{
		$this->db->order_by('id','ASC');
		return $this->db->get('tim')->result_array();
	}

	public function num_rows()
	{
		$this->db->where('is_leader',1);
		return $this->db->get('tim')->num_rows();
	}

	public function tambah()
	{
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keterangan=$this->input->post('keterangan');
		$gambar=$this->gambar();
		$facebook=$this->input->post('facebook');
		$instagram=$this->input->post('instagram');
		$linkedin=$this->input->post('linkedin');
		$sum_tim=$this->num_rows();

		if ($sum_tim==0) {
			$is_leader=1;
		} else {
			$is_leader=0;
		}

		if ($gambar==NULL) {
			$data=[
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'keterangan'=>$keterangan,
				'gambar'=>'default.png',
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				'linkedin'=>$linkedin,
				'is_leader'=>$is_leader
			];
		} else {
			$data=[
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'keterangan'=>$keterangan,
				'gambar'=>$gambar,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				'linkedin'=>$linkedin,
				'is_leader'=>$is_leader
			];
		}

		$this->db->insert('tim',$data);

		redirect('tim');
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$keterangan=$this->input->post('keterangan');
		$gambar=$this->gambar();
		$facebook=$this->input->post('facebook');
		$instagram=$this->input->post('instagram');
		$linkedin=$this->input->post('linkedin');
		$sum_tim=$this->num_rows();

		$this->db->where('id',$id);
		$data=$this->db->get('tim')->row_array();

		if ($data['is_leader']==1) {
			$is_leader=1;
		} else {
			$is_leader=0;
		}

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/assets/img/upload/teams/'.$data['gambar']);
		}

		if ($gambar == NULL) {
			$data=[
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'keterangan'=>$keterangan,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				'linkedin'=>$linkedin,
				'is_leader'=>$is_leader
			];
		} else {
			$data=[
				'nama'=>$nama,
				'jabatan'=>$jabatan,
				'keterangan'=>$keterangan,
				'gambar'=>$gambar,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				'linkedin'=>$linkedin,
				'is_leader'=>$is_leader
			];
		}
		
		$this->db->where('id',$id);
		$this->db->update('tim',$data);

		redirect('tim');
	}

	public function hapus()
	{
		$id=$this->uri->segment(3);

		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('tim')->row_array();

		if ($gambar_lama['gambar'] != 'default.png') {
			unlink(FCPATH . 'assets/assets/img/upload/teams/'.$gambar_lama['gambar']);
		}
		$this->db->where('id',$id);
		$this->db->delete('tim');

		redirect('tim');
	}

	private function gambar()
	{
		$config['upload_path']='./assets/assets/img/upload/teams/';
		$config['allowed_types']='jpg|png|jpeg';
		$config['file_name']='tim'.time();

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('gambar')) {
			$error=array('error'=>$this->upload->display_errors());
		} else {
			return $this->upload->data("file_name");
		}
	}
}