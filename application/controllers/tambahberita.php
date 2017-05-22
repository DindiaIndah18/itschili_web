<?php

class berita extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('modelberita');
$this->load->helper('url');
}

function index(){
$data['post'] = $this->modelberita->tampil_data()->result();
$this->load->view('tampilberita',$data);
}

function tambah(){
$this->load->view('inputberita');
}

function tambah_baru(){
$judul = $this->input->post('judul');
$isi = $this->input->post('isi');
$kategori = $this->input->post('kategori');

$data = array(
'judul' => $judul,
'isi' => $isi, 
'kategori' => $kategori
);

$this->modelberita->input_data($data,'post');
redirect('tambahberita/index');
}

function hapus($id){
$this->load->model('modelberita');
$this->modelberita->hapus_data($id);
redirect('tambahberita/index');
}

function edit($id_post){
$where = array('id_post' => $id_post);
$data['post'] = $this->modelberita->edit_data($where,'post')->result();
$this->load->view('editberita',$data);
}

function update(){
$id_post = $this->input->post('id_post');
$judul = $this->input->post('judul');
$isi = $this->input->post('isi');
$kategori = $this->input->post('kategori');

$data = array(
'judul' => $judul,
'isi' => $isi,
'kategori' => $kategori
);

$where = array(
'id_post' => $id_post
);

$this->modelberita->update_data($where,$data,'post');
redirect('tambahberita/index');
}

}
?>