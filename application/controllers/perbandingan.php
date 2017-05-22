<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perbandingan extends CI_Controller {
	public function index()
	{
		$this->load->model('cabaimodel');
	
		$data = $this->cabaimodel->get_perbandingan_cabai();
		$datas = [['name' => 'Cabai Merah', 'data' => []], ['name' => 'Cabai Hijau', 'data' => []]];
		$tgl = [];
		
		foreach($data as $d) {
			if($d['nama'] == 'Cabai Merah') {
				$datas[0]['data'][] = intval($d['harga']);
			}
			else if($d['nama'] == 'Cabai Hijau') {
				$datas[1]['data'][] = intval($d['harga']);
			}
			
			if(!in_array($d['tanggal'], $tgl)) {
				$tgl[] = $d['tanggal'];
			}
		}
		
		
		$tgl = json_encode($tgl);
		$datas = json_encode($datas);
		
		
		$this->load->view('perbandingan', ['datas' => $datas, 'tgl' => $tgl]);
	}
}
