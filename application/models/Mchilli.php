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
  
  public function gabungdata($id){
	    $this->db->select('*');
            $this->db->from('jenis j'); 
            $this->db->join('harga h', 'h.id_jenis=j.id_jenis', 'left');
            $this->db->join('pasar p', 'p.id_pasar=h.id_pasar', 'left');
            $this->db->where('p.id_pasar',$id);
            $this->db->order_by('h.tgl','asc');         
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
  }
}


 ?>
