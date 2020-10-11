<?php
class Users extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_users');
	}

	function index()
	{
		$data['users']=$this->m_users->get_users(); //Memanggil function get_users didalam m_users
		$this->load->view('partials/v_head');
		$this->load->view('partials/v_header');
		$this->load->view('partials/v_sidebar');
		$this->load->view('administrator/v_users',$data); //Meload view users
		$this->load->view('partials/v_footer');
	}

	function add_users_action()
	{
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$this->m_users->save_users($nama,$username,$password,$level); //Memanggil function save_users didalam m_users
		echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil ditambahkan</label>'); 
		redirect('users');
	}

	function edit_users_action()
	{
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$this->m_users->update_users($kode,$nama,$username,$password,$level); //Memanggil function update_users didalam m_users
			echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil diedit</label>');
		redirect('users');
	}

	function delete_users()
	{
		$kode=$this->input->post('kode');
		$this->m_users->delete_users($kode); //Memanggil function delete_users didalam m_users
		redirect('users');
	}
}