<?php

class sparepart extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        ceklogin();
        $this->load->model('Sparepart_model');

    }
    
    function index(){
        $data['record'] = $this->Sparepart_model->getAllData();
        $this->template->load('template/master','sparepartdash',$data);
    }
    
    function tambah(){
        
    }
    
    
    
    
}