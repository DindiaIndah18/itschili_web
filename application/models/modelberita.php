<?php

class modelberita extends CI_Model{

function tampil_data(){
return $this->db->get('post');
}

function input_data($data,$table){
$this->db->insert($table,$data);
}

function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
	
function hapus_data($id_post){
$this->db->where('id_post',$id_post);
$this->db->delete('post');
return;
}

function edit_data($where,$table){
return $this->db->get_where($table,$where);
}

}
?>