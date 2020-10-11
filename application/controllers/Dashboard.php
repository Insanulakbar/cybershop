<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->model('m_dashboard'); //Model Dashboard untuk Grafik
		$this->load->library('session'); //Session Library
	}

	public function index()
	{
		$data['cat_pc'] = $this->m_dashboard->GetCatPC(); //Melihat database untuk PC
		$data['cat_laptop'] = $this->m_dashboard->GetCatLaptop(); //Melihat database untuk Laptop
		$data['cat_notebook'] = $this->m_dashboard->GetCatNotebook(); //Melihat database untuk Notebook
		$data['cat_smartphone'] = $this->m_dashboard->GetCatSmartphone(); //Melihat database untuk Smartphone
		$data['all'] = $this->m_dashboard->GetAll(); //Melihat database Produk Keseluruhahn
		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('v_dashboard',$data); //Load View Dashboard
		$this->load->view('partials/v_footer');
	}
}
