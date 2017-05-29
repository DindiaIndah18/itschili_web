<?php
/**
 *
 */
class Itschilli extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    $this->load->model('Mchilli');
    $this->model = $this->Mchilli;
    $this->load->helper('url');
  }

  public function index()
  {
    $this->cekSession();
    //$this->load->view('Vdaftar');
  }

  public function cekSession()
  {
    if($this->session->userdata('status') != "login"){
			$this->load->view('Vlogin');
    }else {
      $this->load->view('Vadmin');
    }
  }

  public function cekLogin()
  {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $where = array(
      'email' => $email,
      'pass' => md5($password)
      );
      $cek = $this->Mchilli->cekdata("customer",$where)->num_rows();
        if($cek > 0){
          $data_session = array(
            'email' => $email,
            'status' => "login"
            );
          $this->session->set_userdata($data_session);
          redirect('itschilli');

        }else{
          echo "Username dan password salah !";
        }
  }

  public function daftar()
  {
    if (null !== $this->input->post('simpan')) {

      $nama = $this->input->post('nama');
      $telp = $this->input->post('telp');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $data = array(
      'nama' => $nama,
      'no_telp' => $telp,
      'email' => $email,
      'pass' => md5($password)
      );

      $hasil = $this->Mchilli->inputdata("customer",$data);
      if($hasil){
        $this->index();
      }else{
        echo "Gagal mendaftar!";
      }
    }else {
        $this->load->view('Vdaftar');
    }
  }
  
  public function menuHarga()
  {
    $datauser['dataharga'] = $this->model->getdata('harga');

    $this->load->view('VHarga', $datauser);
  }
  
  public function menuHargaEdit($idharga)
  {
    $where = array(
    'idharga' => $idharga
    );

    if (null !== $this->input->post('edit')) {
      $tgl = $this->input->post('tgl');
    $id_jenis = $this->input->post('id_jenis');
    $id_pasar = $this->input->post('id_pasar');
    $harga = $this->input->post('harga');
    $data = array(
    'tgl' => $tgl,
    'id_jenis' => $id_jenis,
	'id_pasar' => $id_pasar,
    'harga' => $harga,
    );

      $hasil = $this->Mchilli->updatedata("harga", $data, $where);
      if($hasil){
        redirect('itschilli/menuHarga');
      }else{
        echo "Gagal Update!";
      }
    }else {
		$dataharga = $this->model->cekdata('harga',$where)->row();
        //$datauser['datauser'] = $data -> result();
        $this->load->view('VHargaedit', ['datauser'=>$dataharga, 'idharga'=>$idharga]);
    }
  }


  public function menuMUser()
  {
    $datauser['datauser'] = $this->model->getdata('customer');

    $this->load->view('VMUser', $datauser);
  }

  public function menuMUserEdit($id)
  {
    $where = array(
    'id' => $id
    );

    if (null !== $this->input->post('edit')) {
      $nama = $this->input->post('nama');
      $telp = $this->input->post('telp');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $data = array(
      'nama' => $nama,
      'no_telp' => $telp,
      'email' => $email,
      'pass' => md5($password)
      );

      $hasil = $this->Mchilli->updatedata("customer", $data, $where);
      if($hasil){
        redirect('itschilli/menuMUser');
      }else{
        echo "Gagal Update!";
      }
    }else {
      $datauser['datauser'] = $this->model->cekdata('customer',$where)->row();
        //$datauser['datauser'] = $data -> result();
        $this->load->view('VMUseredit',$datauser);
    }
  }

public function delete($id)
{
  $where = array(
  'id' => $id
  );
  $hasil = $this->Mchilli->deletedata("customer", $where);
  redirect($_SERVER['HTTP_REFERER']);
}

public function menuBerita()
{
  $datauser['databerita'] = $this->model->getdata('berita');
  $this->load->view('VBerita',$datauser);
}

public function menuBeritaedit($idberita)
{
  $where = array(
  'idberita' => $idberita
  );

  if (null !== $this->input->post('edit')) {
    $judulBerita = $this->input->post('judulBerita');
    $deskBerita = $this->input->post('deskBerita');
    $date = $this->input->post('date');
    $link = $this->input->post('link');
    $image = $this->input->post('image');
    $data = array(
    'judulBerita' => $judulBerita,
    'deskBerita' => $deskBerita,
    'date' => $date,
    'link' => $link,
    'image' => $image,
    );

    $hasil = $this->Mchilli->updatedata("berita", $data, $where);
    if($hasil){
      redirect('itschilli/menuBerita');
    }else{
      echo "Gagal Update!";
    }
  }else {
    $databerita['databerita'] = $this->model->cekdata('berita',$where)->row();
      //$datauser['datauser'] = $data -> result();
      $this->load->view('VBeritaedit',$databerita);
  }
}

	public function logout(){
		$this->session->sess_destroy();
		redirect('itschilli');
	}

  public function menuPerkembangan()
  {
    $lokasi = isset($_GET['lokasi']) ? $_GET['lokasi'] : '1';

    $datalokasi['hasil'] = $this->model->gabungdata($lokasi);

    if ($datalokasi['hasil']<>null) {
      foreach($datalokasi['hasil'] as $d) {
        $tgl[] = $d['tgl'];
        $name[] = $d['nama_jenis'];
      }
        foreach($datalokasi['hasil'] as $d) {
          if($d['nama_jenis'] == $name[0]) {
            $datas[0]['name'] = $name[0];
            $datas[0]['data'][] = intval($d['harga']);
          }
          else if($d['nama_jenis'] == $name[1]) {
            $datas[1]['name'] = $name[1];
            $datas[1]['data'][] = intval($d['harga']);
          }else if($d['nama_jenis'] == $name[2]) {
            $datas[2]['name'] = $name[2];
            $datas[2]['data'][] = intval($d['harga']);
          }

          if(!in_array($d['tgl'], $tgl)) {
            $tgl[] = $d['tgl'];
          }

        }
        $datalokasi['tgl'] = json_encode($tgl);
        $datalokasi['datas'] = json_encode($datas);
    }

    $datalokasi['datalokasi'] = $this->model->getdata('pasar');

    $this->load->view('Vperkembangan', $datalokasi);
  }
}
 ?>
