<?php
class M_petugas extends CI_Model{
  private $table="petugas";

  function cek($username,$password){
    $this->db->where("user",$username);
    $this->db->where("password",$password);
    return $this->db->get("petugas");
  }

  public function checkPetugas($username, $password)
  {
    $this->db->where("user",$username);
    $this->db->where("password",$password);

    $data = $this->db->get('petugas');
    var_dump($data);
    return $this->db->get("petugas");
  }
}
