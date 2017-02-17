<?php
class Buku extends CI_Controller{
  private $limit=20;

  function __construct(){
    parent::__construct();

    $this->load->library(array('template', 'form_validation', 'pagination', 'upload'));
    $this->load->model('m_buku');

    if(!$this->session->userdata('username')){

    }
  }

    function index($offset=0, $order_column='kode_buku',$order_type='asc'){
      if(empty($offset)) $offset=0;
      if(empty($order_column)) $order_column='kode_buku';
      if(empty($order_type)) $order_type='asc';

      //Proses Data

      $data['buku']=$this->m_buku->semua($this->limit, $offset, $order_column, $order_type)->result();
      $data['title']="Data Buku";

      $config['base_url']=site_url('anggota/index/');
      $config['total_rows']=$this->m_buku->jumlah();
      $config['per_page']=$this->limit;
      $config['url_segment']=3;

      $this->pagination->initialize($config);
      $data['pagination']=$this->pagination->create_links();

      if()
}
}
