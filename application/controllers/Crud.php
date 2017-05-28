<?php

class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$id_user = $this->input->post('id_user');
		$nama= $this->input->post('nama');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$level = $this->input->post('level');
 
		$data = array(
			'id_user' => $id_user,
			'nama' => $nama,
			'user' => $user,
			'pass' => $pass,
			'level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('Crud/index');
	}
	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->m_data->hapus_data($where,'user');
		redirect('Crud/index');
	}
	function edit($id_user){
		$where = array('id_user' => $id_user);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
	$id_user = $this->input->post('id_user');
	$nama = $this->input->post('nama');
	$user = $this->input->post('user');
	$pass = $this->input->post('pass');
	$level = $this->input->post('level');

	$data = array(
		'nama' => $nama,
		'user' => $user,
		'pass' => $pass,
		'level' => $level
	);

	$where = array(
		'id_user' => $id_user
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('Crud/index');
	}
}
?>