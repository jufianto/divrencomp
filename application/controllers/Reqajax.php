<?php

class Reqajax extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Servis_model');

  }
  function detail($id=null){
    if($id!=null){
    $data['kategori']   = $this->Servis_model->getKategori();
    $total = $this->Servis_model->detail($id)->num_rows();
    $data['rc'] = $this->Servis_model->detail($id)->row();

      if($total != 0){
         $this->load->view('confservis',$data);
      }else{
       echo "No Nota anda tidak terdeteksi oleh sistem kami";
    }
  } else {
    echo "No Nota anda tidak terdeteksi oleh sistem kami";
  }
  }
}
