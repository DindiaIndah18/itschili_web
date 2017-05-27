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

  public function ceklogin($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function inputdata($table, $data)
  {
    return $this->db->insert($table, $data);
  }
}


 ?>
