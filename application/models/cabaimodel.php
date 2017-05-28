<?php
 class cabaimodel extends CI_Model{
	 function get_perbandingan_cabai($lokasi){
		 $query=$this->db->query("SELECT nama, harga, tanggal FROM cabai c JOIN harga h ON c.id_cabai = h.id_cabai WHERE lokasi LIKE '%$lokasi%' ORDER BY tanggal ASC");
		 return $query->result_array();
	 }
	 function tampil_data(){
return $this->db->get('cabai');
}
 }

?>