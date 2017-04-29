<?php

class servis extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        ceklogin();
        $this->load->model('Servis_model');

    }

    function index(){
        $data['record'] = $this->Servis_model->get_all_data();
        $this->template->load('template/master','servisdash',$data);
    }

    function tambahservis(){
        $this->template->load('template/master','tambahservis');

    }

    function prosestambah(){
      $nama =$this->input->post('nama');
      $nohp =$this->input->post('nohp');
      $kategori =$this->input->post('kategori');
      $tipe =$this->input->post('tipe');
      $kelengkapan =$this->input->post('kelengkapan');
      
    }




}
