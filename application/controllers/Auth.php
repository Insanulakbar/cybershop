<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model'); //Memanggil Model Auth
        $this->load->library('session'); //Memanggil Library Session
    }

    public function index()
    {
        $this->load->view('v_login'); //View Login
    }

    public function proses_login()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required'); 

        //set message form validation
        $this->form_validation->set_message('required', '{field} is required.');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/login'); // LOGIN
        
        } else {

            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));

            // CEK KE DATABASE BERDASARKAN EMAIL
            $cek_login = $this->auth_model->cek_login($username); 
                
            if($cek_login == FALSE)
            {
                echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('auth/login').'";</script>';
            
            } else {
            
                if(password_verify($pass, $cek_login->password)){
                    // if the username and password is a match
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('username', $cek_login->username);
                    $this->session->set_userdata('name', $cek_login->name);
                    
                    $username = $this->session->userdata('username');
                    $password = $this->session->userdata('password');
                    redirect('dashboard'); //Sukses
                        
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('auth/login').'";</script>'; //Jika Username dan Password Salah di input
                }
            }
        }
    }

    public function proses_register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim'); 
        $this->form_validation->set_rules('level', 'Level', 'required|trim');        

        //set message form validation
        $this->form_validation->set_message('required', '{field} is required.');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth');
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'name' => $name,
                'username' => $username,
                'password' => $pass,
                'level' => $level,
            ];
            $insert = $this->auth_model->register("users", $data);
            if($insert)
            {
                echo '<script>alert("Sukses! Data Berhasil di input.");window.location.href="'.base_url('users').'";</script>'; //Sukses Menginput data Users
            } 
        }
    }

    public function logout()
    {
         $this->session->sess_destroy();
         redirect(base_url("auth")); //Logout akan kedirect ke halaman login
    }
} 