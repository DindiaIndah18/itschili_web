<?php

class listharga extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('modelharga');
$this->load->helper('url');
}

function index(){
$data['harga'] = $this->modelharga->tampil_data()->result();
$this->load->view('listhargacabai',$data);
}

function edit($id_harga){
$where = array('id_harga' => $id_harga);
$data['harga'] = $this->modelharga->edit_data($where,'harga')->result();
$this->load->view('updateharga',$data);
}

function update(){
$id_harga = $this->input->post('id_harga');
$harga = $this->input->post('harga');
$tanggal = $this->input->post('tanggal');


$data = array(
'harga' => $harga,
'tanggal' => $tanggal
);

$where = array(
'id_harga' => $id_harga
);

$this->modelharga->update_data($where,$data,'harga');
redirect('listharga/index');
}

}
?>