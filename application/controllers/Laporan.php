<?php

class Laporan extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    ceklogin();
    $this->load->model('Laporan_model');
      $this->load->model('Dashboard_model');
  }

  function index(){
    $data['batal'] = $this->Laporan_model->countBatal();
    $data['terima'] = $this->Dashboard_model->countServis();
    $data['spare'] = $this->Dashboard_model->countSpare();

    $this->template->load('template/master','laporan',$data);
  }



}
