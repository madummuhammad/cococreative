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


	public function edit_carousel()
	{
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$tagline=$this->input->post('tagline');
		$gambar=$this->upload_carousel();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_carousel_edit());
		if ($validasi->run()==false) {
			redirect('website');
		} else {
			if ($gambar==NULL) {
				$data=[
					'judul'=>$judul,
					'tagline'=>$tagline,
				];
				
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id',$id);
					$this->db->update('carousel',$data);
				} else {
					$this->db->where('id_carousel',$id);
					$this->db->update('carousel_eng',$data);
				}
				
				redirect('website');
			} else {
				$data=[
					'judul'=>$judul,
					'tagline'=>$tagline,
					
				];

				$data2=[
					'gambar'=>$gambar
				];

				unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id',$id);
					$this->db->update('carousel',$data);

					$this->db->where('id',$id);
					$this->db->update('carousel',$data2);
				} else {
					$this->db->where('id_carousel',$id);
					$this->db->update('carousel_eng',$data);

					$this->db->where('id',$id);
					$this->db->update('carousel',$data2);
				}
				redirect('website');
			}
		}
	}

	public function tambah_carousel()
	{
		$judul=$this->input->post('judul');
		$tagline=$this->input->post('tagline');
		$title=$this->input->post('title');
		$tagline2=$this->input->post('tagline2');

		$this->db->select_max('id','id');
		$id_carousel=$this->db->get('carousel')->row_array();

		$gambar=$this->upload_carousel();
		$validasi=$this->form_validation->set_rules($this->rules_carousel());
		if ($validasi->run()==false) {
			redirect('website');
		} else {
			if ($gambar==NULL) {
				redirect('website');
			} else {
				$data=[
					'id'=>$id_carousel['id']+1,
					'judul'=>$judul,
					'tagline'=>$tagline,
					'gambar'=>$gambar,
				];
				$data2=[
					'id'=>$id_carousel['id']+1,
					'judul'=>$title,
					'tagline'=>$tagline2,
					'id_carousel'=>$id_carousel['id']+1
				];
				$this->db->insert('carousel',$data);
				$this->db->insert('carousel_eng',$data2);
				redirect('website');
			}
		}
	}

	public function hapus_carousel()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('carousel');

		$this->db->where('id_carousel',$id);
		$this->db->delete('carousel_eng');
		redirect('website');
	}


// Tampil Footer Deskripsi
	public function tampil_footer_deskripsi()
	{
		$this->db->join('footer_deskripsi_eng','footer_deskripsi.id_footer_deskripsi=footer_deskripsi_eng.id_footer_deskripsi');
		$result=$this->db->get('footer_deskripsi')->row_array();
		return $result;
	}
// 

	public function tampil_logo_bisnis_footer()
	{
		$result=$this->db->get('logo_bisnis_footer')->result_array();
		return $result;
	}

	public function tambah_logo_bisnis_footer()
	{
		$link=$this->input->post('link');
		$gambar=$this->upload_logo_bisnis_footer();
		$validasi=$this->form_validation->set_rules($this->rules_logo_bisnis_footer());
		if ($validasi->run()==false) {
			redirect('website');
		} else {
			$data=[
				'link'=>$link,
				'gambar'=>$gambar
			];
			$this->db->insert('logo_bisnis_footer',$data);
			redirect('website');
		}
	}

	public function edit_logo_bisnis_footer()
	{
		$id=$this->input->post('id');
		$link=$this->input->post('link');
		$gambar=$this->upload_logo_bisnis_footer();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_logo_bisnis_footer());
		if ($validasi->run()==false) {
			redirect('error');
		} else {
			if ($gambar==NULL) {
				$data=[
					'link'=>$link,
				];
					$this->db->where('id',$id);
					$this->db->update('logo_bisnis_footer',$data);
				redirect('website');
			} else {
				$data=[
					'link'=>$link,
					'gambar'=>$gambar
				];
				unlink(FCPATH . 'assets/assets/img/logos/'.$gambar_lama);
					$this->db->where('id',$id);
					$this->db->update('logo_bisnis_footer',$data);
				redirect('website');
			}
		}
	}

	public function hapus_logo_bisnis_footer()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$result=$this->db->get('logo_bisnis_footer')->row_array();
		$gambar_lama=$result['gambar'];
		unlink(FCPATH . 'assets/assets/img/logos/'.$gambar_lama);
		$this->db->where('id',$id);
		$this->db->delete('logo_bisnis_footer');
		redirect('website');
	}

	private function rules_logo_bisnis_footer()
	{
		return [
			['field' => 'link',
			'rules' => 'required']
		];
	}

	private function upload_logo_bisnis_footer()
	{
		$config['upload_path']          = './assets/assets/img/logos/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
		$config['file_name']            ='logo_bisnis_footer';
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

	private function upload_carousel()
	{
		$config['upload_path']          = './assets/assets/img/upload/website/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            ='carousel';
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

	private function rules_carousel()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'tagline',
			'rules' => 'required'],
			['field' => 'title',
			'rules' => 'required'],
			['field' => 'tagline2',
			'rules' => 'required']
		];
	}

	private function rules_carousel_edit()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'tagline',
			'rules' => 'required']
		];
	}

	public function tambah_trust()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$icon=$this->input->post('icon');
		$title=$this->input->post('title');
		$icon2=$this->input->post('icon2');
		$content=$this->input->post('contents');

		$this->db->select_max('id','id');
		$id_trust=$this->db->get('trust')->row_array();

		$validasi=$this->form_validation->set_rules($this->rules_trust2());

		$data=[
			'id'=>$id_trust['id']+1,
			'judul'=>$judul,
			'isi'=>$isi,
			'icon'=>$icon
		];

		$data2=[
			'id'=>$id_trust['id']+1,
			'judul'=>$title,
			'isi'=>$content,
			'id_trust'=>$id_trust['id']+1
		];

		if ($validasi->run()==false) {
			redirect('website');
		} else {

			$this->db->insert('trust',$data);
			$this->db->insert('trust_eng',$data2);
			redirect('website');
		}

	}

	public function edit_trust()
	{
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$icon=$this->input->post('icon');
		$validasi=$this->form_validation->set_rules($this->rules_trust());



		if ($validasi->run()==false) {
			redirect('website');
		} else {
			if (get_cookie('lang_is')=='in') {
				$data=[
					'judul'=>$judul,
					'isi'=>$isi,
					'icon'=>$icon
				];
				$this->db->where('id',$id);
				$this->db->update('trust',$data);
			} else {
				$data=[
					'judul'=>$judul,
					'isi'=>$isi,
				];
				$data2=[
					'icon'=>$icon
				];
				$this->db->where('id',$id);
				$this->db->update('trust_eng',$data);

				$this->db->where('id',$id);
				$this->db->update('trust',$data2);
			}

			redirect('website');
		}
	}

	public function hapus_trust()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('trust');

		$this->db->where('id',$id);
		$this->db->delete('trust_eng');
		redirect('website');
	}

	private function rules_trust()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'isi',
			'rules' => 'required'],
			['field' => 'icon',
			'rules' => 'required']
		];
	}

	private function rules_trust2()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'isi',
			'rules' => 'required'],
			['field' => 'title',
			'rules' => 'required'],
			['field' => 'contents',
			'rules' => 'required'],
			['field' => 'icon',
			'rules' => 'required']
		];
	}


	public function edit_desproduk()
	{
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$gambar=$this->upload_desproduk();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_desproduk());
		if ($validasi->run()==false) {
			redirect('website');
		} else {
			if ($gambar==NULL) {
				$data=[
					'judul'=>$judul,
					'isi'=>$isi,
				];
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id',$id);
					$this->db->update('des_product',$data);
				} else {
					$this->db->where('id',$id);
					$this->db->update('des_product_eng',$data);
				}
				redirect('website');
			} else {
				unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);
				if (get_cookie('lang_is')=='in') {
					$data=[
						'judul'=>$judul,
						'isi'=>$isi,
						'gambar'=>$gambar,
					];
					$this->db->where('id',$id);
					$this->db->update('des_product',$data);
				} else {
					$data=[
						'judul'=>$judul,
						'isi'=>$isi,
					];

					$data2=[
						'gambar'=>$gambar
					];

					$this->db->where('id',$id);
					$this->db->update('des_product_eng',$data);

					$this->db->where('id',$id);
					$this->db->update('des_product',$data2);
				}

				redirect('website');
			}
		}
	}

	public function hapus_desproduk()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('des_product');
		redirect('website');
	}

	private function upload_desproduk()
	{
		$config['upload_path']          = './assets/assets/img/upload/website/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            ='desproduk';
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
	private function rules_desproduk()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'isi',
			'rules' => 'required']
		];
	}


	public function edit_topimage()
	{
		$page=$this->input->post('page');
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$gambar=$this->upload_topimage();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_topimage());
		if ($validasi->run()==false) {
			if ($page=='about') {
				redirect('website/about');
			} elseif ($page=='testimonial') {
				redirect('website/testimonial');
			} else {
				redirect('website/produk');
			}

		} else {
			if ($gambar==NULL) {
				$data=[
					'judul'=>$judul,
				];
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id',$id);
					$this->db->update('top_img',$data);
				} else {
					$this->db->where('id',$id);
					$this->db->update('top_img_eng',$data);
				}

				if ($page=='about') {
					redirect('website/about');
				} elseif ($page=='testimonial') {
					redirect('website/testimonial');
				} else {
					redirect('website/produk');
				}
			} else {
				unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);
				if (get_cookie('lang_is')=='in') {
					$data=[
						'judul'=>$judul,
						'gambar'=>$gambar,
					];
					$this->db->where('id',$id);
					$this->db->update('top_img',$data);
				} else {
					$data=[
						'judul'=>$judul
					];
					$data2=[
						'gambar'=>$gambar
					];
					$this->db->where('id',$id);
					$this->db->update('top_img_eng',$data);

					$this->db->where('id',$id);
					$this->db->update('top_img',$data2);
				}

				if ($page=='about') {
					redirect('website/about');
				} elseif ($page=='testimonial') {
					redirect('website/testimonial');
				} else {
					redirect('website/produk');
				}
			}
		}
	}

	private function rules_topimage()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
		];
	}

	private function upload_topimage()
	{
		$config['upload_path']          = './assets/assets/img/upload/website/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            ='top_img';
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

	public function edit_about()
	{
		$page=$this->uri->segment(2);
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$gambar=$this->upload_about();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_about());
		if ($validasi->run()==false) {
			if ($page=='edit_about') {
				redirect('website/about');
			} elseif ($page=='testimonial') {
				redirect('website/testimonial');
			} else {
				redirect('website/produk');
			}
		} else {
			if ($gambar==NULL) {
				$data=[
					'judul'=>$judul,
					'isi'=>$isi,
				];
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id',$id);
					$this->db->update('about',$data);
				} else {
					$this->db->where('id',$id);
					$this->db->update('about_eng',$data);
				}

				if ($page=='edit_about') {
					redirect('website/about');
				} elseif ($page=='testimonial') {
					redirect('website/testimonial');
				} else {
					redirect('website/produk');
				}
			} else {

				unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);

				if (get_cookie('lang_is')=='in') {
					$data=[
						'judul'=>$judul,
						'isi'=>$isi,
						'gambar'=>$gambar,
					];
					$this->db->where('id',$id);
					$this->db->update('about',$data);
				} else {
					$data=[
						'judul'=>$judul,
						'isi'=>$isi,

					];

					$data2=[
						'gambar'=>$gambar
					];

					$this->db->where('id',$id);
					$this->db->update('about',$data2);

					$this->db->where('id',$id);
					$this->db->update('about_eng',$data);
				}



				if ($page=='edit_about') {
					redirect('website/about');
				} elseif ($page=='testimonial') {
					redirect('website/testimonial');
				} elseif ($page=='about') {
					redirect('website/about');
				} else {
					redirect('website/produk');
				}
			}
		}
	}


	private function upload_about()
	{
		$config['upload_path']          = './assets/assets/img/upload/website/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']            ='profil';
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
	private function rules_about()
	{
		return [
			['field' => 'judul',
			'rules' => 'required'],
			['field' => 'isi',
			'rules' => 'required']
		];
	}

	public function tampil_link()
	{
		$result=$this->db->get('link_video')->row_array();
		return $result;
	}

	public function edit_link_video()
	{
		$url=$this->input->post('link');
		$link=str_replace('http://www.youtube.com/watch?v=','', $url);
		$link=str_replace('https://www.youtube.com/watch?v=', '', $link);

		$data=[
			'link'=>$link
		];
		$this->db->where('id_link',1);
		$this->db->update('link_video',$data);
		redirect('website');
	}

	public function tambah_testimoni()
	{
		$isitestimoni=$this->input->post('isitestimoni');
		$isitestimonial=$this->input->post('isitestimonial');

		$this->db->select_max('id_testimoni','id_testimoni');
		$id_testimoni=$this->db->get('testimonial')->row_array();

		$gambar=$this->upload_testimoni();
		$validasi=$this->form_validation->set_rules($this->rules_testimoni());
		if ($validasi->run()==false) {
			redirect('errorisi');
		} else {
			if ($gambar==NULL) {
				redirect('errorgambar');
			} else {
				$data=[
					'id_testimoni'=>$id_testimoni['id_testimoni']+1,
					'isi'=>$isitestimoni,
					'gambar'=>$gambar,
				];
				$data2=[
					'id_testimoni_eng'=>$id_testimoni['id_testimoni']+1,
					'isi'=>$isitestimonial,
					'id_testimoni'=>$id_testimoni['id_testimoni']+1
				];
				$this->db->insert('testimonial',$data);
				$this->db->insert('testimonial_eng',$data2);
				redirect('website');
			}
		}
	}

	public function edit_testimoni()
	{
		$id=$this->input->post('id_testimoni');
		$isi=$this->input->post('isi');
		$gambar=$this->upload_testimoni();
		$gambar_lama=$this->input->post('gambar_lama');
		$validasi=$this->form_validation->set_rules($this->rules_testimoni_edit());
		if ($validasi->run()==false) {
			redirect('errorisi');
		} else {
			if ($gambar==NULL) {
				$data=[
					'isi'=>$isi
				];

				if (get_cookie('lang_is')=='in') {
					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial',$data);
				} else {
					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial_eng',$data);
				}

				redirect('website');
			} else {
				$data=[
					'isi'=>$isi,
				];

				$data2=[
					'gambar'=>$gambar
				];

				unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);
				if (get_cookie('lang_is')=='in') {
					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial',$data);

					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial',$data2);
				} else {
					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial_eng',$data);

					$this->db->where('id_testimoni',$id);
					$this->db->update('testimonial',$data2);
				}
				redirect('website');
			}
		}
	}

	public function hapus_testimoni()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_testimoni',$id);
		$result=$this->db->get('testimonial')->row_array();
		$gambar_lama=$result['gambar'];


		unlink(FCPATH . 'assets/assets/img/upload/website/'.$gambar_lama);

		$this->db->where('id_testimoni',$id);
		$this->db->delete('testimonial');

		$this->db->where('id_testimoni',$id);
		$this->db->delete('testimonial_eng');

		redirect('website');
	}


	private function upload_testimoni()
	{
		$config['upload_path']          = './assets/assets/img/upload/website/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']            ='testimonial';
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

	private function rules_testimoni()
	{
		return [
			['field' => 'isitestimoni',
			'rules' => 'required'],
			['field' => 'isitestimonial',
			'rules' => 'required'],
		];
	}

	private function rules_testimoni_edit()
	{
		return [
			['field' => 'isi',
			'rules' => 'required'],
		];
	}

	public function edit_deskripsi_footer()
	{
		$isi=$this->input->post('isi');
		$isi_eng=$this->input->post('isi_eng');
		if (empty($isi)) {
			redirect('error');
		} else {
			if (empty($isi_eng)) {
				redirect('error');
			} else {
				$data1=[
					'isi'=>$isi
				];

				$data2=[
					'isi_eng'=>$isi_eng
				];

				$this->db->where('id_footer_deskripsi',1);
				$this->db->update('footer_deskripsi',$data1);

				$this->db->where('id_footer_deskripsi_eng',1);
				$this->db->update('footer_deskripsi_eng',$data2);

				redirect('website');
			}
		}
	}
}