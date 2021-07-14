<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Produk extends CI_Model {
	public function tampil_jenis_produk()
	{
		$this->db->order_by('urutan','DESC');
		$result=$this->db->get('jenis_produk')->result_array();
		return $result;
	}
	public function view_more()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_jenis_produk',$id);
		$result=$this->db->get('variasi_produk')->result_array();
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

	public function bahasa_ukuran($id)
	{
		$this->db->join('pilihan_ukuran_eng','pilihan_ukuran.id_pilihan_ukuran=pilihan_ukuran_eng.id_pilihan_ukuran');
		$this->db->join('parameter_ukuran','pilihan_ukuran.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');
		$this->db->join('variasi_produk','parameter_ukuran.id_parameter_ukuran=variasi_produk.id_parameter_ukuran');
		$this->db->where('pilihan_ukuran.id_pilihan_ukuran',$id);
		$result=$this->db->get('pilihan_ukuran')->row_array();
		return $result;
	}

	public function tampil_edit_produk()
	{
		$id_jenis_produk=$this->uri->segment(3);
		$this->db->join('variasi_produk','jenis_produk.id_jenis_produk=variasi_produk.id_jenis_produk');

		$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');
		
		$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');
		$this->db->where('jenis_produk.id_jenis_produk',$id_jenis_produk);
		$result=$this->db->get('jenis_produk')->row_array();
		return $result;
	}

	public function tampil_bahasa_produk()
	{
		$id_jenis_produk=$this->uri->segment(3);
		$this->db->join('variasi_produk','jenis_produk.id_jenis_produk=variasi_produk.id_jenis_produk');

		$this->db->join('jenis_produk_eng','jenis_produk.id_jenis_produk=jenis_produk_eng.id_jenis_produk');

		$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');

		$this->db->join('parameter_ukuran_eng','parameter_ukuran.id_parameter_ukuran=parameter_ukuran_eng.id_parameter_ukuran');

		$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');
		$this->db->where('jenis_produk.id_jenis_produk',$id_jenis_produk);
		$result=$this->db->get('jenis_produk')->row_array();
		return $result;
	}
	public function tampil_variasi_produk()
	{
		$id=$this->uri->segment(3);
		// $this->db->distinct();
		$this->db->join('jenis_produk','variasi_produk.id_jenis_produk=jenis_produk.id_jenis_produk');

		$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');
		
		$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');

		$this->db->where('variasi_produk.id_jenis_produk',$id);
		$result=$this->db->get('variasi_produk')->result_array();
		return $result;
	}
	public function tampil_jenis_produk_variasi()
	{
		$id=$this->uri->segment(3);
		$this->db->distinct();
		$this->db->from('jenis_produk');
		return $this->db->select('nama_jenis_produk')
		->where('id_jenis_produk',$id)
		->get()
		->row_array();
	}
	public function tambah_produk()
	{

		// Jenis Produk
		$nama_produk=$this->input->post('nama_produk');
		$keterangan=$this->input->post('keterangan');
		$gambar_utama=$this->upload_jenis_produk();
		$keterangan=$this->input->post('keterangan_jenis_produk');
		$waktu_upload=time();
		$view_more=$this->input->post('view_more')?:0;
		$tema_display=0;
		$id_jenis_produk='JB'.time();

		$data_jenis_produk=[
			'id_jenis_produk'=>$id_jenis_produk,
			'nama_jenis_produk'=>$nama_produk,
			'gambar'=>$gambar_utama,
			'keterangan'=>$keterangan,
			'waktu_upload'=>$waktu_upload,
			'view_more?'=>$view_more,
			'tema_display'=>$tema_display
		];

		$this->db->insert('jenis_produk',$data_jenis_produk);

		// Parameter Ukuran

		$this->db->select_max('id_parameter_ukuran','id');
		$parameter_ukuran=$this->db->get('parameter_ukuran')->row_array();
		$id_parameter_ukuran=$parameter_ukuran['id']+1;
		$nama_parameter=$this->input->post('nama_variasi');
		$data_parameter_ukuran=[
			'id_parameter_ukuran'=>$id_parameter_ukuran,
			'nama_parameter'=>$nama_parameter
		];

		$this->db->insert('parameter_ukuran',$data_parameter_ukuran);


		// pilihan_ukuran

		$jumlah_pilihan_variasi=count($this->input->post('pilihan_variasi[]'));
		$isi_pilihan_variasi=$this->input->post('pilihan_variasi[]');
		$nama_gambar_variasi='VB'.time();
		$gambar_variasi=$this->upload_variasi_produk();
		$harga_variasi=$this->input->post('harga_variasi[]');
		$keterangan_variasi_produk=$this->input->post('keterangan_variasi_produk[]');

		for ($i=0 ; $i < $jumlah_pilihan_variasi  ; $i++ ) {


			$data_pilihan_ukuran=[
				'isi_pilihan_ukuran'=>$isi_pilihan_variasi[$i],
				'id_parameter_ukuran'=>$id_parameter_ukuran,
				'gambar_variasi'=>$nama_gambar_variasi.$i.'.jpg',
				'harga'=>$harga_variasi[$i],
				'keterangan_variasi_produk'=>$keterangan_variasi_produk[$i]
			];

			$this->db->insert('pilihan_ukuran',$data_pilihan_ukuran);
		}

		// Variasi Produk

		$data_variasi_produk=[
			'id_jenis_produk'=>$id_jenis_produk,
			'waktu_upload'=>time(),
			'id_parameter_ukuran'=>$id_parameter_ukuran
		];

		$this->db->insert('variasi_produk',$data_variasi_produk);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Berhasil Menambah Data!
			</div>');
		redirect('produk');
		
		
	}
	public function tambah_variasi_produk()
	{
		$nama_produk=$this->input->post('nama_produk');
		$gambar=$this->upload_variasi_produk()?:'default.jpg';
		$keterangan=$this->input->post('keterangan');
		$id_jenis_produk=$this->input->post('id_jenis_produk');
		$validasi=$this->form_validation->set_rules($this->rules_variasi_produk());
		$data=[
			'nama_produk'=>$nama_produk,
			'gambar_variasi'=>$gambar,
			'keterangan'=>$keterangan,
			'id_jenis_produk'=>$id_jenis_produk,
			'waktu_upload'=>time()
		];
		if ($validasi->run()) {
			$this->db->insert('produk',$data);
			redirect('produk/variasi_produk/'.$id_jenis_produk);
		} else {
			redirect('produk/variasi_produk/'.$id_jenis_produk);
		}
	}
	public function edit_produk()
	{
		$id_jenis_produk=$this->input->post('id_jenis_produk');
		$nama_jenis_produk=$this->input->post('nama_produk');
		$keterangan_jenis_produk=$this->input->post('keterangan_jenis_produk');
		$foto_utama_lama=$this->input->post('foto_utama_lama');
		$foto_utama=$this->upload_jenis_produk();

		if ($foto_utama==NULL) {
			$data_jenis_produk=[
				'nama_jenis_produk'=>$nama_jenis_produk,
				'keterangan'=>$keterangan_jenis_produk,
				'waktu_upload'=>time()
			];
			$this->db->where('id_jenis_produk',$id_jenis_produk);
			$this->db->update('jenis_produk',$data_jenis_produk);
		} else {
			$data_jenis_produk=[
				'nama_jenis_produk'=>$nama_jenis_produk,
				'gambar'=>$foto_utama,
				'keterangan'=>$keterangan_jenis_produk,
				'waktu_upload'=>time()
			];
			if ($gambar_lama!='default.jpg') {
				unlink(FCPATH . 'assets/assets/img/upload/produk/'.$foto_utama_lama);
			}
			$this->db->where('id_jenis_produk',$id_jenis_produk);
			$this->db->update('jenis_produk',$data_jenis_produk);

		}


		$nama_parameter_ukuran=$this->input->post('nama_parameter_ukuran');
		$id_parameter_ukuran=$this->input->post('id_parameter_ukuran');

		$data_parameter_ukuran=[
			'nama_parameter'=>$nama_parameter_ukuran
		];

		$this->db->where('id_parameter_ukuran',$id_parameter_ukuran);
		$this->db->update('parameter_ukuran',$data_parameter_ukuran);
		
		$id_pilihan_ukuran=$this->input->post('id_pilihan_ukuran[]');
		$pilihan_variasi=$this->input->post('pilihan_variasi[]');
		$keterangan_variasi_produk=$this->input->post('keterangan_variasi_produk[]');
		$harga_variasi=$this->input->post('harga_variasi[]');
		$jumlahdata=count($id_pilihan_ukuran);
		$gambar_variasi=$this->upload_edit_variasi_produk();
		$foto_variasi_lama=$this->input->post('gambar_variasi_lama[]');
		for ($i=0; $i < $jumlahdata; $i++) {

			if ($gambar_variasi['error'][$i]==4) {
				$data_pilihan_ukuran=[
					'isi_pilihan_ukuran'=>$pilihan_variasi[$i],
					'harga'=>$harga_variasi[$i],
					'keterangan_variasi_produk'=>$keterangan_variasi_produk[$i]
				];
				$this->db->where('id_pilihan_ukuran',$id_pilihan_ukuran[$i]);
				$this->db->update('pilihan_ukuran',$data_pilihan_ukuran);
			} else {
				$data_pilihan_ukuran=[
					'isi_pilihan_ukuran'=>$pilihan_variasi[$i],
					'gambar_variasi'=>$gambar_variasi['nama_file_diupload'].$i.'.jpg',
					'harga'=>$harga_variasi[$i],
					'keterangan_variasi_produk'=>$keterangan_variasi_produk[$i]
				];
				if ($gambar_lama!='default.jpg') {
					unlink(FCPATH . 'assets/assets/img/upload/variasi_produk/'.$foto_variasi_lama[$i]);
				}
				$this->db->where('id_pilihan_ukuran',$id_pilihan_ukuran[$i]);
				$this->db->update('pilihan_ukuran',$data_pilihan_ukuran);
			}
			

		}

		$jumlah_pilihan_variasi=count($this->input->post('edit_pilihan_variasi[]'));
		// Tambah Variasi
		if ($jumlah_pilihan_variasi!=0) {
			$tambah_isi_pilihan_variasi=$this->input->post('edit_pilihan_variasi[]');
			$tambah_harga_variasi=$this->input->post('edit_harga_variasi[]');
			$tambah_keterangan_variasi=$this->input->post('edit_keterangan_variasi_produk');
			$tambah_gambar_variasi=$this->input->post('edit_gambar_variasi');
			
			$nama_gambar_variasi='VB'.time();
			$gambar_variasi=$this->upload_tambah_edit_variasi_produk();

			for ($i=0 ; $i < $jumlah_pilihan_variasi  ; $i++ ) {
				$data_edit_tambah_pilihan_ukuran=[
					'isi_pilihan_ukuran'=>$tambah_isi_pilihan_variasi[$i],
					'id_parameter_ukuran'=>$id_parameter_ukuran,
					'gambar_variasi'=>$nama_gambar_variasi.$i.'.jpg',
					'harga'=>$tambah_harga_variasi[$i],
					'keterangan_variasi_produk'=>$tambah_keterangan_variasi[$i]
				];

				$this->db->insert('pilihan_ukuran',$data_edit_tambah_pilihan_ukuran);
			}
		}

		redirect('produk/edit_produk/'.$id_jenis_produk);
	}
	public function bahasa_produk()
	{
		$id_jenis_produk=$this->input->post('id_jenis_produk');
		$nama_produk=$this->input->post('nama_produk');
		$keterangan=$this->input->post('keterangan');
		$keterangan=$this->input->post('keterangan_jenis_produk');
		$data_jenis_produk=[
			'id_jenis_produk'=>$id_jenis_produk,
			'nama_jenis_produk'=>$nama_produk,
			'keterangan'=>$keterangan,
		];

		$this->db->insert('jenis_produk_eng',$data_jenis_produk);

		$nama_parameter_ukuran=$this->input->post('nama_parameter_ukuran');
		$id_parameter_ukuran=$this->input->post('id_parameter_ukuran');

		$data_parameter_ukuran=[
			'id_parameter_ukuran'=>$id_parameter_ukuran,
			'nama_parameter'=>$nama_parameter_ukuran
		];

		$this->db->insert('parameter_ukuran_eng',$data_parameter_ukuran);


		$id_pilihan_ukuran=$this->input->post('id_pilihan_ukuran[]');
		$pilihan_variasi=$this->input->post('pilihan_variasi[]');
		$keterangan_variasi_produk=$this->input->post('keterangan_variasi_produk[]');
		$jumlahdata=count($id_pilihan_ukuran);



		for ($i=0; $i < $jumlahdata; $i++) {
			$data_pilihan_ukuran=[
				'id_parameter_ukuran'=>$id_parameter_ukuran,
				'isi_pilihan_ukuran'=>$pilihan_variasi[$i],
				'keterangan_variasi_produk'=>$keterangan_variasi_produk[$i],
				'id_pilihan_ukuran'=>$id_pilihan_ukuran[$i]
			];
			$this->db->insert('pilihan_ukuran_eng',$data_pilihan_ukuran);
		}

		redirect('produk');

	}

	public function edit_bahasa_produk()
	{
		$id_jenis_produk=$this->input->post('id_jenis_produk');
		$nama_produk=$this->input->post('nama_produk');
		$keterangan=$this->input->post('keterangan');
		$keterangan=$this->input->post('keterangan_jenis_produk');
		$data_jenis_produk=[
			'nama_jenis_produk'=>$nama_produk,
			'keterangan'=>$keterangan,
		];
		$this->db->where('id_jenis_produk',$id_jenis_produk);
		$this->db->update('jenis_produk_eng',$data_jenis_produk);

		$nama_parameter_ukuran=$this->input->post('nama_parameter_ukuran');
		$id_parameter_ukuran=$this->input->post('id_parameter_ukuran');

		$data_parameter_ukuran=[
			'nama_parameter'=>$nama_parameter_ukuran
		];

		$this->db->where('id_parameter_ukuran',$id_parameter_ukuran);
		$this->db->update('parameter_ukuran_eng',$data_parameter_ukuran);


		$id_pilihan_ukuran=$this->input->post('id_pilihan_ukuran[]');
		$pilihan_variasi=$this->input->post('pilihan_variasi[]');
		$keterangan_variasi_produk=$this->input->post('keterangan_variasi_produk[]');
		$jumlahdata=count($id_pilihan_ukuran);



		for ($i=0; $i < $jumlahdata; $i++) {
			$data_pilihan_ukuran=[
				'id_parameter_ukuran'=>$id_parameter_ukuran,
				'isi_pilihan_ukuran'=>$pilihan_variasi[$i],
				'keterangan_variasi_produk'=>$keterangan_variasi_produk[$i],
				'id_pilihan_ukuran'=>$id_pilihan_ukuran[$i]
			];
			$this->db->where('id_pilihan_ukuran',$id_parameter_ukuran[$i]);
			$this->db->update('pilihan_ukuran_eng',$data_pilihan_ukuran);
		}

		redirect('produk');
	}

	public function ubah_view_more()
	{
		$view_more=$this->input->post('view_more');
		$id_jenis_produk=$this->input->post('id_jenisproduk');
		if ($view_more==1) {
			$data=0;
		} else {
			$data=1;
		}
		$this->db->where('id_jenis_produk',$id_jenis_produk);
		$this->db->update('jenis_produk',['view_more?'=>$data]);
	}
	public function hapus_produk()
	{
		$id_jenis_produk=$this->uri->segment(3);
		$this->db->join('variasi_produk','jenis_produk.id_jenis_produk=variasi_produk.id_jenis_produk');

		$this->db->join('parameter_ukuran','variasi_produk.id_parameter_ukuran=parameter_ukuran.id_parameter_ukuran');

		$this->db->join('pilihan_ukuran','parameter_ukuran.id_parameter_ukuran=pilihan_ukuran.id_parameter_ukuran');
		$this->db->where('jenis_produk.id_jenis_produk',$id_jenis_produk);
		$result=$this->db->get('jenis_produk')->row_array();


		$this->db->where('id_parameter_ukuran',$result['id_parameter_ukuran']);
		$result_array=$this->db->get('pilihan_ukuran')->result_array();

		foreach ($result_array as $row => $value) {
			unlink(FCPATH . 'assets/assets/img/upload/variasi_produk/'.$value['gambar_variasi']);
		}

		$this->db->where('id_jenis_produk',$id_jenis_produk);
		$this->db->delete('jenis_produk');
		$gambar_utama_lama=$result['gambar'];
		unlink(FCPATH . 'assets/assets/img/upload/produk/'.$gambar_utama_lama);


		$this->db->where('id_parameter_ukuran',$result['id_parameter_ukuran']);
		$this->db->delete('parameter_ukuran');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data tersebut berhasil dihapus!
			</div>');
		redirect('produk');
	}
	public function hapus_variasi_produk()
	{
		$id_pilihan_ukuran=$this->uri->segment(4);
		$id_jenis_produk=$this->uri->segment(3);
		$this->db->where('id_pilihan_ukuran',$id_pilihan_ukuran);
		$result=$this->db->get('pilihan_ukuran')->row_array();

		$gambar_variasi_lama=$result['gambar_variasi'];
		unlink(FCPATH . 'assets/assets/img/upload/variasi_produk/'.$gambar_variasi_lama);

		$this->db->where('id_pilihan_ukuran',$id_pilihan_ukuran);
		$this->db->delete('pilihan_ukuran');
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Pilihan Variasi tersebut berhasil dihapus!
			</div>');
		redirect('produk/edit_produk/'.$id_jenis_produk);
	}
	private function rules_produk()
	{

		return [
			['field' => 'id_produk',
			'rules' => 'required',
			'label' => 'ID Produk',
			'errors'=>[
				'required'=>'ID Produk belum diisi',
				'is_unique'=>'ID Sudah ada'
			]
		],

		['field' => 'nama_produk',
		'rules' => 'required',
		'label'=>'Nama Produk',
		'errors'=>[
			'required'=>'Nama Produk Belum Di Isi'
		]
	],

	['field' => 'keterangan',
	'rules' => 'required',
	'label'=>'Keterangan',
	'errors'=>[
		'required'=>'Keterangan belum diisi'
	]
]

];

}
private function rules_variasi_produk()
{
	return [
		['field' => 'nama_produk',
		'rules' => 'required'],
		['field' => 'keterangan',
		'rules' => 'required']
	];
}

private function upload_variasi_produk()
{
	$nama_file=$_FILES['gambar_variasi']['name'];
	$jumlahdata=count($nama_file);
	$tmp_name=$_FILES['gambar_variasi']['tmp_name'];
	$nama_file_diupload='VB'.time();
	for ($i=0; $i < $jumlahdata; $i++) {
		move_uploaded_file($tmp_name[$i], './assets/assets/img/upload/variasi_produk/'.$nama_file_diupload.$i.'.jpg');
	};	
}

private function upload_tambah_edit_variasi_produk()
{
	$nama_file=$_FILES['edit_gambar_variasi']['name'];
	$jumlahdata=count($nama_file);
	$tmp_name=$_FILES['edit_gambar_variasi']['tmp_name'];
	$error=$_FILES['edit_gambar_variasi']['error'];
	$nama_file_diupload='VB'.time();
	for ($i=0; $i < $jumlahdata; $i++) {
		move_uploaded_file($tmp_name[$i], './assets/assets/img/upload/variasi_produk/'.$nama_file_diupload.$i.'.jpg');
	};	
}

private function upload_edit_variasi_produk()
{
	$nama_file=$_FILES['gambar_variasi']['name'];
	$jumlahdata=count($nama_file);
	$tmp_name=$_FILES['gambar_variasi']['tmp_name'];
	$error=$_FILES['gambar_variasi']['error'];
	$nama_file_diupload='VB'.time();
	for ($i=0; $i < $jumlahdata; $i++) {
		move_uploaded_file($tmp_name[$i], './assets/assets/img/upload/variasi_produk/'.$nama_file_diupload.$i.'.jpg');
	};
	
	$data=[
		'error'=>$error,
		'nama_file_diupload'=>$nama_file_diupload
	];
	return $data;
}


private function upload_jenis_produk()
{
	$config['upload_path']='./assets/assets/img/upload/produk/';
	$config['allowed_types']='jpg|png|jpeg';
	$config['file_name']='GJB'.time();

	$this->load->library('upload',$config);

	if (!$this->upload->do_upload('foto_utama')) {
		$error=array('error'=>$this->upload->display_errors());
	} else {
		return $this->upload->data("file_name");
	}
}
}