<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{
	
		 public function __construct()
		 {
		 	parent:: __construct();
			$this->load->model(array('m_petugas'));
			if($this->session->userdata('username')){

					}
		 }


	public function index()
	{
		$this->load->view('web/index');
	}

	public function anggota()
	{
		$this->load->view('web/anggota');
	}

	public function cari_buku()
	{
		$this->load->view('web/cari_buku');

	}

	public function proses()
	{

		$this->load->library('form_validation');
	        $this->form_validation->set_rules('username','Username','required');
	        $this->form_validation->set_rules('password','password','required');

	        if($this->form_validation->run()==FALSE){
	            $this->session->set_flashdata('message','Username dan password harus diisi');
	            redirect('web');
	        }else{
	            $username=$this->input->post('username');
	            $password=$this->input->post('password');
	            $cek=$this->m_petugas->cek($username,md5($password));
	            if($cek->num_rows()>0){

									/*Jika Login Berhasil*/
	                $this->session->set_userdata('username',$username);
	                redirect('dashboard');

	            }else{
	                /*Jika login gagal*/
	                $this->session->set_flashdata('message','Username atau password salah');
	                redirect('web');
	            }
	        }
	    }
	}
