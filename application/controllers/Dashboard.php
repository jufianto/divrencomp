<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    ceklogin();
    $this->load->model('Dashboard_model');

  }

  function index(){
    $data['servis'] = $this->Dashboard_model->countServis();
    $data['sparepart'] = $this->Dashboard_model->countSpare();
    $this->template->load('template/master' , 'utama',$data);
  }
}
