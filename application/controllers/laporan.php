<?php
class Laporan extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library(array('template'));
    $this->load->model('m_laporan');

    if(!$this->session->userdata('username')){
      redirect('web');
    }
  }

  function anggota(){
    $data['title']="Data Anggota";
    $data['anggota']=$this->m_laporan->semuaAnggota()->result();
    $this->template->display('laporan/anggota', $data);
  }

  function buku(){
    $data['title']="Data Buku";
    $data['buku']=$this->m_laporan->semuaBuku()->result();
    $this->template->display('laporan/buku', $data);
  }

  function peminjaman(){
    $data['title']="Detail Peminjaman";
    $this->template->display('laporan/peminjaman', $data);
  }
}
