<?php
 class cabaimodel extends CI_Model{
	 function get_perbandingan_cabai(){
		 $query=$this->db->query("SELECT nama, harga, tanggal FROM cabai c JOIN harga h ON c.id_cabai = h.id_cabai ORDER BY tanggal ASC");
		 return $query->result_array();
	 }
 }

?>