<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		pengunjung();
		
	}
	public function index()
	{
		$data['jenis_produk']=$this->M_Produk->tampil_jenis_produk();
		$order=$this->input->post('order-now');
		$add=$this->input->post('add-chart');

		// if ($this->input->post('product')=='Plant Support') {
		// 	$product='plant';
		// } elseif ($this->input->post('product')=='Coconut Rope') {
		// 	$product='rope';
		// }

		$this->form_validation->set_rules('product','Product','trim|required');
		$this->form_validation->set_rules('size','Size','trim|required');
		$this->form_validation->set_rules('qty','Qty','trim|required');
		if ($this->form_validation->run()==false) {
			redirect('produk');
			// $this->session->set_flashdata('failed',$product);
			// $this->load->view('company_profile/partial/header');
			// $this->load->view('company_profile/partial/preloader');
			// $this->load->view('company_profile/partial/mainNav');
			// $this->load->view('company_profile/v_product',$data);
			// $this->load->view('company_profile/partial/modal');
			// $this->load->view('company_profile/partial/footer');
		} else {
			if ($order!==NULL) {
				$product=$this->input->post('product');
				
				$qty=$this->input->post('qty');
				$size=$this->input->post('size')*$qty;
				redirect("https://wa.me/send?phone=6285290076364&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20membeli%20produk%20berikut:%0ANama%20Produk:%20".$product."%0ATotal%0APembelian:%20".$size."%0AQty:%20".$qty."%0ATerimakasih");
			} elseif ($add!==NULL) {
				$this->M_Order->add_to_chart();
				redirect('produk');
			}
		}
	}
	public function order_all()
	{
		foreach ($this->session->userdata('dataorder') as $row){
			$product=$row['product'];
			$size=$row['size'];
			$qty=$row['qty'];
			$data=[$product,$size,$qty];
			$array=array($data);
		}
		redirect("https://wa.me/send?phone=6285290076364&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20membeli%20produk%20berikut:%0ANama%20Produk:%20".$product."%0ATotal%0APembelian:%20".$size."%0AQty:%20".$qty."%0ATerimakasih");
	}
	public function harga()
	{
		if ($_POST){
			$harga=$_POST['size'];
			$qty=$_POST['qty'];
			$id=$_POST['id'];

			if ($qty) {
				$hasil=$harga*$qty; echo "Total: Rp.";
				echo number_format($hasil);
			} else {
				echo "Total: Rp.";
				echo number_format($harga);
			}
		} else {
			echo "Harga: Pilih Terlebih Dahulu";
		}

	}
	public function session()
	{
		session_destroy();
		redirect('produk');
	}
}