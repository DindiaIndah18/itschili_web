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
      $hasil['customer'] = $this->Mchilli->getBanyak("customer");
      $hasil['jenis'] = $this->Mchilli->getBanyak("jenis");
      $hasil['pasar'] = $this->Mchilli->getBanyak("pasar");
      $hasil['berita'] = $this->Mchilli->getBanyak("berita");
      $this->load->view('Vadmin', $hasil);
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
  
  public function menuJenisCabai()
  {
	  $datauser['datajenis'] = $this->model->getdata('jenis');
	  $this->load->view('Vjenis', $datauser);
  }
  public function menuJenisCabaiEdit($id_jenis)
  {
    $where = array(
    'id_jenis' => $id_jenis
    );

    if (null !== $this->input->post('edit')) {
      $nama_jenis = $this->input->post('nama_jenis');
      $data = array(
      'nama_jenis' => $nama_jenis,
      );

      $hasil = $this->Mchilli->updatedata("jenis", $data, $where);
      if($hasil){
        redirect('itschilli/menuJenisCabai');
		}else{
        echo "Gagal Update!";
      }
    }else {
      $datajenis['datajenis'] = $this->model->cekdata('jenis',$where)->row();
        //$datauser['datauser'] = $data -> result();
        $this->load->view('Vjenisedit',$datajenis);
	}
  }
  
  public function menuTambahJenis()
{

	if (null !== $this->input->post('simpan')) {

      $id_jenis = $this->input->post('id_jenis');
      $nama_jenis = $this->input->post('nama_jenis');
      $data = array(
	  'id_jenis' => $id_jenis,
      'nama_jenis' => $nama_jenis,
      );

      $hasil = $this->Mchilli->inputdata("jenis",$data);
      if($hasil){
        redirect('itschilli/menuJenisCabai');
      }else{
        echo "Gagal mendaftar!";
      }
    }else {
		$this->load->view('Vjenistambah');
    }
}
  public function menuLokasi()
  {
    $datalokasi['datalokasi'] = $this->model->getdata('pasar');
    $this->load->view('VLokasi', $datalokasi);
  }

  public function menuTambahLokasi()
{

	if (null !== $this->input->post('simpan')) {

      $id_pasar = $this->input->post('id_pasar');
      $nama_lokasi = $this->input->post('nama_lokasi');
      $nama_pasar = $this->input->post('nama_pasar');
      $data = array(
      'nama_lokasi' => $nama_lokasi,
      'nama_pasar' => $nama_pasar,
      );

      $hasil = $this->Mchilli->inputdata("pasar",$data);
      if($hasil){
        redirect('itschilli/menuLokasi');
      }else{
        echo "Gagal mendaftar!";
      }
    }else {
        $this->load->view('TLokasi');
    }
	
}

public function menuEditLokasi($idpasar)
{
  $where = array(
  'id_pasar' => $idpasar
  );

  if (null !== $this->input->post('edit')) {
    $nama_pasar = $this->input->post('nama_pasar');
    $nama_daerah = $this->input->post('nama_daerah');
    $data = array(
    'nama_pasar' => $nama_pasar,
    'nama_lokasi' => $nama_daerah,
    );

    $hasil = $this->Mchilli->updatedata("pasar", $data, $where);
    if($hasil){
      redirect('itschilli/menuLokasi');
    }else{
      echo "Gagal Update!";
    }
  } else {
    $datalokasi['datalokasi'] = $this->model->cekdata('pasar',$where)->row();
     // $datauser1['datauser'] = $data -> result();
      $this->load->view('VLokasiedit',$datalokasi);
  }

}


  public function menuHarga()
  {
    $datauser['dataharga'] = $this->model->getdata('harga');

    $this->load->view('VHarga', $datauser);
  }
  
public function menuTambahHarga()
{

	if (null !== $this->input->post('simpan')) {

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

      $hasil = $this->Mchilli->inputdata("harga",$data);
      if($hasil){
        redirect('itschilli/menuHarga');
      }else{
        echo "Gagal menginputkan!";
      }
    }else {
        $this->load->view('THarga');
    }
	
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
    'harga' => $harga
    );

	$where = array(
    'idharga' => $idharga
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
  
  public function menuTambahMUser()
{

	if (null !== $this->input->post('simpan')) {

      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
	  $no_telp = $this->input->post('no_telp');
	  $pass = md5($this->input->post('pass'));
      $data = array(
      'id' => $id,
      'nama' => $nama,
	  'email' => $email,
      'no_telp' => $no_telp,
	  'pass' => $pass,
      );

      $hasil = $this->Mchilli->inputdata("customer",$data);
      if($hasil){
        redirect('itschilli/menuMUser');
      }else{
        echo "Gagal menginputkan!";
      }
    }else {
        $this->load->view('TMUser');
    }
	
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

  public function menuTambahBerita()
{

	if (null !== $this->input->post('simpan')) {

      $idberita = $this->input->post('idberita');
      $judulBerita = $this->input->post('judulBerita');
      $deskBerita = $this->input->post('deskBerita');
	  $date = $this->input->post('date');
	  $link = $this->input->post('link');
	  $image = $this->input->post('image');
      $data = array(
      'idberita' => $id_berita,
      'judulBerita' => $judulBerita,
	  'deskBerita' => $deskBerita,
      'date' => $date,
	  'link' => $link,
	  'image' => $image,
      );

      $hasil = $this->Mchilli->inputdata("berita",$data);
      if($hasil){
        redirect('itschilli/menuBerita');
      }else{
        echo "Gagal menginputkan!";
      }
    }else {
        $this->load->view('TBerita');
    }
	
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
