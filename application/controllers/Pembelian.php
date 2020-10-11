<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembelian'); //Memanggil model pembelian
		
	}

	public function index()
	{
		$data['pembelian']=$this->m_pembelian->get_pembelian(); //Memanggil Function get_pembelian didalam M_pembelian
		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('pembelian/v_pembelian',$data); //Meload View Pembelian
		$this->load->view('partials/v_footer');
	}

	public function add_pembelian()
	{
		$namapembelian=$this->input->post('namapembelian');
		$category=$this->input->post('category');
		$kuantitas=$this->input->post('kuantitas');
		$this->m_pembelian->simpan_pembelian($namapembelian,$category,$kuantitas); //Memanggil Function simpan_pembelian didalam M_pembelian

		redirect('pembelian');//jika data berhasil disave, kedirect kehalaman pembelian
	}

	function edit_pembelian()
	{
		$id=$this->input->post('id');
		$namapembelian=$this->input->post('namapembelian');
		$category=$this->input->post('category');
		$kuantitas=$this->input->post('kuantitas');
		$this->m_pembelian->update_pembelian($id,$namapembelian,$category,$kuantitas); //Memanggil Function update_pembelian didalam M_pembelian
			
		redirect('pembelian'); //jika data berhasil diedit, kedirect kehalaman pembelian
	}

	function delete_pembelian()
	{
		$id=$this->input->post('id');
		$this->m_pembelian->delete_pembelian($id); //Memanggil Function delete_pembelian didalam M_pembelian
		redirect('pembelian'); //jika data berhasil didelete, kedirect kehalaman pembelian
	}
}
