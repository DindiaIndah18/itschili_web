<?php
/**
 *
 */
class Mchilli extends CI_Model
{

  function __construct()
  {
    parent:: __construct();
    $this->load->database();
  }

  public function cekdata($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function inputdata($table, $data)
  {
    return $this->db->insert($table, $data);
  }

  public function updatedata($table, $data, $where)
  {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

  public function deletedata($table, $where)
  {
    $this->db->where($where);
    return $this->db->delete($table);
  }

  public function getdata($table)
  {
    $hasil = $this->db->get($table);
    return $hasil->result();
  }
}


 ?>
