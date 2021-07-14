<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

	public function total_pengunjung()
	{
		$this->M_Pengunjung->total_pengunjung();
	}

}