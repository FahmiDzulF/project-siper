<?php
class Peminjaman extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->library(array('form_validation','template'));
      $this->load->model('m_peminjaman')

    }
}
