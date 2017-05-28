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
      $cek = $this->Mchilli->ceklogin("customer",$where)->num_rows();
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

	public function logout(){
		$this->session->sess_destroy();
		redirect('itschilli');
	}

}
 ?>
