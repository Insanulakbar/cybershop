<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_product'); //Memanggil model m_product
	}

	public function index()
	{
		$data['product']=$this->m_product->get_product(); //Memanggil function get_product didalam m_product
		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('product/v_product',$data); //Meload View product
		$this->load->view('partials/v_footer');
	}

	public function add_product()
	{
		$kodeproduct=$this->m_product->get_kodeproduct();
		$namaproduct=$this->input->post('namaproduct');
		$category=$this->input->post('category');
		$harga=str_replace(',', '', $this->input->post('harga'));
		$stok=$this->input->post('stok');
		$this->m_product->simpan_product($kodeproduct,$namaproduct,$category,$harga,$stok);//Memanggil Function simpan_product didalam M_product

		redirect('product'); //jika data berhasil disave, kedirect kehalaman product
	}

	function edit_product()
	{
		$kodeproduct=$this->input->post('kodeproduct');
		$namaproduct=$this->input->post('namaproduct');
		$category=$this->input->post('category');
		$harga=str_replace(',', '', $this->input->post('harga'));
		$stok=$this->input->post('stok');
		$this->m_product->update_product($kodeproduct,$namaproduct,$category,$harga,$stok); //Memanggil Function update_product didalam M_product
			
		redirect('product'); //jika data berhasil diedit, kedirect kehalaman product
	}

	function delete_product()
	{
		$id=$this->input->post('id');
		$this->m_product->delete_product($id); //Memanggil Function delete_product didalam M_product
		redirect('product'); //jika data berhasil didelete, kedirect kehalaman product
	}
}
