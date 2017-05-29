<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perbandingan extends CI_Controller {
	public function index()
	{
		$this->load->model('Mchilli');
		$this->model = $this->Mchilli;
		
		$lokasi = isset($_GET['lokasi']) ? $_GET['lokasi'] : '';
	
		$datalokasi['hasil'] = $this->model->gabungdata($lokasi);
		
		foreach($datalokasi['hasil'] as $d) {
			$tgl[] = $d['tgl'];
			$name[] = $d['nama_jenis'];
		}
			foreach($datalokasi['hasil'] as $d) {
				if($d['nama'] == $name[0]) {
					$datas[0]['data'][] = intval($d['harga']);
				}
				else if($d['nama'] == $name[2]) {
					$datas[1]['data'][] = intval($d['harga']);
				}
				
				if(!in_array($d['tanggal'], $tgl)) {
					$tgl[] = $d['tgl'];
				}
			
			}
	
		
		
		/*$datas = [['name' => 'Cabai Merah', 'data' => []], ['name' => 'Cabai Hijau', 'data' => []],['name' => 'Cabai Lokal', 'data' => []]];
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
		$datas = json_encode($datas);*/
		
		$datalokasi['tgl'] = json_encode($tgl);
		$datalokasi['nama'] = json_encode($nama);
		
		$datalokasi['datalokasi'] = $this->model->getdata('pasar');
		
		//$this->load->view('coba', ['datas' => $datas, 'tgl' => $tgl]);
		$this->load->view('perbandingan', $datalokasi);
		
		
		
		
		
		/*$this->load->model('cabaimodel');
		
		$lokasi = isset($_GET['lokasi']) ? $_GET['lokasi'] : '';
	
		$data = $this->cabaimodel->get_perbandingan_cabai($lokasi);
		$datas = [['name' => 'Cabai Merah', 'data' => []], ['name' => 'Cabai Hijau', 'data' => []],['name' => 'Cabai Lokal', 'data' => []]];
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
		
		
		$this->load->view('coba', ['datas' => $datas, 'tgl' => $tgl]);*/
	}
}
