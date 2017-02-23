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

      if($this->uri->segment(3)=="delete_success")
        $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
          else if($this->uri->segment(3)=="add_success")
        $data['message']="<div class='alert alert-success'>Data berhasil disimpan</div>";
          else
        $data['message']='';
        $this->template->display('buku/index', $data);
      }

      function tambah(){
        $data['title']="Tambah Buku";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('kode');
            $cek=$this->m_buku->cek($kode);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Kode Buku sudah ada</div>";
                $this->template->display('buku/tambah',$data);
            }else{

                //setting konfiguras upload image
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '1000';
                $config['max_width']  = '2000';
                $config['max_height']  = '1024';

                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }

                $info=array(
                    'kode_buku'=>$this->input->post('kode'),
                    'judul'=>$this->input->post('judul'),
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'image'=>$gambar
                );
                $this->m_buku->simpan($info);
                redirect('buku/index/add_success');

            }
        }else{
            $data['message']="";
            $this->template->display('buku/tambah',$data);
        }
    }
              function hapus(){
                  $kode=$this->input->post('kode');
                  $detail=$this->m_buku->cek($kode)->result();
          	foreach($detail as $det):
          	    unlink("assets/img/".$det->image);
          	endforeach;
                  $this->m_buku->hapus($kode);
              }

              function cari(){
                  $data['title']="Pencairan";
                  $cari=$this->input->post('cari');
                  $cek=$this->m_buku->cari($cari);
                  if($cek->num_rows()>0){
                      $data['message']="";
                      $data['buku']=$cek->result();
                      $this->template->display('buku/cari',$data);
                  }else{
                      $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
                      $data['buku']=$cek->result();
                      $this->template->display('buku/cari',$data);
                  }
              }

              function _set_rules(){
                  $this->form_validation->set_rules('kode','Kode Buku','required|max_length[5]');
                  $this->form_validation->set_rules('judul','Judul Buku','required|max_length[100]');
                  $this->form_validation->set_rules('pengarang','Pengarang','required|max_length[50]');
                  $this->form_validation->set_rules('klasifikasi','Klasifikasi','required|max_length[25]');
                  $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
              }
          }
