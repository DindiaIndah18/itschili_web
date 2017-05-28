<?php

class harga extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('modelharga');
$this->load->helper('url');
}

function index(){
$data['harga'] = $this->modelharga->tampil_data()->result();
$this->load->view('listharga',$data);
}

function tambah(){
	$this->load->model('cabaimodel');
$data['cabai'] = $this->cabaimodel->tampil_data()->result();
$this->load->view('tambahharga', $data);
}

function tambah_harga(){
$cabai = $this->input->post('cabai');
$harga = $this->input->post('harga');
$tanggal = $this->input->post('tanggal');
$lokasi = $this->input->post('lokasi');

$data = array(
'id_cabai' => $cabai,
'harga' => $harga,
'tanggal' => $tanggal, 
'lokasi' => $lokasi
);

$this->modelharga->input_data($data,'harga');
redirect('harga/index');
}

function hapus($id_harga){
$this->load->model('modelharga');
$this->modelharga->hapus_data($id_harga);
redirect('harga/index');
}

function edit($id_harga){
		$this->load->model('cabaimodel');
$data['cabai'] = $this->cabaimodel->tampil_data()->result();
$where = array('id_harga' => $id_harga);
$data['harga'] = $this->modelharga->edit_data($where,'harga')->result();
$this->load->view('editharga',$data);
}

function update(){
$id_harga = $this->input->post('id_harga');
$id_cabai = $this->input->post('cabai');
$harga = $this->input->post('harga');
$tanggal = $this->input->post('tanggal');
$lokasi = $this->input->post('lokasi');

$data = array(
'id_cabai' => $id_cabai,
'harga' => $harga,
'tanggal' => $tanggal,
'lokasi' => $lokasi
);

$where = array(
'id_harga' => $id_harga
);

$this->modelharga->update_data($where,$data,'harga');
redirect('harga/index');
}

}
?>