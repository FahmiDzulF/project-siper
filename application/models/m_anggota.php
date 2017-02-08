  <?php
class M_anggota extends CI_Model{
  private $table="anggota";
  private $primary="nis";

  function semua($limit=10, $offset=0, $order_column='',$oder_type='asc'){
    if(empty($order_column) || empty($order_type))
    $this->db->order_by($this->primary, 'asc');

    else
    $this->db->order_by($order_column, $order_type);
    return $this->db->get($this->table, $limit, $offset);
  }

  function jumlah(){
    return $this->db->count_all($this->table);
  }
  function cek(){
    $this->db->where($this->primary,$kode);
    $query=$this->db->get($this->table);

    return $query;
  }

  function simpan($jenis){
    $this->db->insert($this->primary, $kode);
    return $this->db->insert_id();
  }

  function update($kode,$jenis){
    $this->db->where($this->priay, $kode);
    return $this->insert_id();
  }

  function hapus($kode){
    $this->db->where($this->primary, $kode);
    $this->db->where($this->table);
  }

  function cari($cari){
    $this->db->like($this->primary, $cari);
    $this->db->or_like("nama", $cari);
    return $this->db->get($this->table);
  }
}
