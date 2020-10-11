<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('m_transaksi'); //Memanggil model m_transaksi
	}

	public function index()
	{
		$product_name = $this->input->post('product_name');
		$data['kuantitas'] = $this->input->post('kuantitas');
		$data['transaksi'] = $this->m_transaksi->GetTransaksi($product_name); //Memanggil function GetTransaksi di dalam model m_transaksi
		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('transaksi/v_transaksi',$data); //Meload view transaksi
		$this->load->view('partials/v_footer');
	}
}