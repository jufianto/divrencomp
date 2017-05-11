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
    // $this->form_validation->set_rules('nama','required');
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->template->load('template/master','tambahSpare');
      //  print_r($_POST); exit;
    }else{
      $dataSpare = array (
        'nama_sparepart' => $this->input->post('nama'),
        'harga_sparepart' => $this->input->post('harga')
      );
      $this->Sparepart_model->tambah($dataSpare);
      $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah ditambahkan'));
      redirect(base_url('sparepart'));
    }

  }

  function delete($id){
      $id = $this->uri->segment(3);
      $this->Sparepart_model->delete($id);
      $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah dihapus'));
      redirect(base_url('sparepart'));


  }

  function edit(){
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'required');
    $id = $this->uri->segment(3);
    $data['record'] = $this->Sparepart_model->getOne($id);
    if ($this->form_validation->run() === FALSE) {
      $this->template->load('template/master','editSpare',$data);
    }else{
      $dataSpare = array (
        'nama_sparepart' => $this->input->post('nama'),
        'harga_sparepart' => $this->input->post('harga')
      );

      $this->Sparepart_model->edit($dataSpare,$id);
      $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah diedit'));
      redirect(base_url('sparepart'));


  }
}
}
