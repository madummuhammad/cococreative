<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model {
	public function tampil_berita()
	{
		$result=$this->db->get('news')->result_array();
		return $result;
	}

	public function tampil_edit_berita()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_news',$id);
		$result=$this->db->get('news')->row_array();
		return $result;
	}

	public function tambah_berita()
	{
		$judul_berita=$this->input->post('judul_berita');
		$headline=$this->input->post('headline');
		if ($headline==NULL) {
			$headline2=0;
		} else {
			$favorite=[
				'favorite'=>0
			];
			$headline2=1;
			$this->db->where('favorite',1);
			$this->db->update('news',$favorite);
		}
		$isi_berita=$this->input->post('isi_berita');

		$gambar=$this->upload_foto_berita();
		$validasi=$this->form_validation->set_rules($this->rules_tambah_berita());
		if ($validasi->run()==false) {
			redirect('berita/tambah_berita');
		} else {
			if ($gambar==NULL) {
				redirect('berita/tambah_berita');
			} else {
				$data=[
					'judul'=>$judul_berita,
					'isi'=>$isi_berita,
					'gambar'=>$gambar,
					'tanggal_upload'=>date('Y-m-d'),
					'time'=>time(),
					'favorite'=>$headline2,
				];
				$this->db->insert('news',$data);
				redirect('berita');
			}
		}
	}

	public function edit_berita()
	{
		$gambar_lama=$this->input->post('gambar_lama');
		$id_news=$this->input->post('id_news');
		$judul_berita=$this->input->post('judul_berita');
		$headline=$this->input->post('headline');
		$isi_berita=$this->input->post('isi_berita');

		$gambar=$this->upload_foto_berita();
		$validasi=$this->form_validation->set_rules($this->rules_tambah_berita());
		if ($validasi->run()==false) {
			redirect('berita/edit_berita/'.$id_news);
		} else {
			if ($gambar==NULL) {
				$data=[
					'judul'=>$judul_berita,
					'isi'=>$isi_berita,
					'tanggal_upload'=>date('Y-m-d'),
					'time'=>time()
				];
				$this->db->where('id_news',$id_news);
				$this->db->update('news',$data);
				redirect('berita');
			} else {
				$data=[
					'judul'=>$judul_berita,
					'isi'=>$isi_berita,
					'gambar'=>$gambar,
					'tanggal_upload'=>date('Y-m-d'),
					'time'=>time()
				];
				unlink(FCPATH . 'assets/assets/img/upload/berita/'.$gambar_lama);
				$this->db->where('id_news',$id_news);
				$this->db->update('news',$data);
				redirect('berita');
			}
		}
	}

	private function upload_foto_berita()
	{
		$config['upload_path']          = './assets/assets/img/upload/berita/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='berita';
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

	private function rules_tambah_berita()
	{
		return [
			['field' => 'judul_berita',
			'rules' => 'required'],
			['field' => 'isi_berita',
			'rules' => 'required']
		];
	}

}