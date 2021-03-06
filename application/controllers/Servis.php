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

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nohp', 'required|max_length[12]|');
    $this->form_validation->set_rules('kategori', 'required');
    $this->form_validation->set_rules('kerusakan', 'required');
    $this->form_validation->set_rules('kelengkapan', 'required');
    if ($this->form_validation->run() === FALSE) {

      $data['kategori'] = $this->Servis_model->getKategori();
      $this->template->load('template/master','tambahservis',$data);
    }else{
      $tempid = $this->checkid();
      $no_nota = date('ymd') . $tempid;
      $dataServis = array (
        'no_nota' => $no_nota ,
        'nama_pelanggan' => $this->input->post('nama'),
        'id_kategori' => $this->input->post('kategori'),
        'tipe' => $this->input->post('tipe'),
        'kelengkapan' => $this->input->post('kelengkapan'),
        'kontak' => $this->input->post('nohp')

      );
      $this->Servis_model->InsertServis($dataServis);

      $dataDetail = array(
        'no_nota'=> $no_nota,
        'kerusakan' => $this->input->post('kerusakan')
      );

      $this->Servis_model->InsertDetailServis($dataDetail);
      $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah ditambahkan'));

      redirect(base_url('servis'));
    }


  }


  function checkid(){
    $getid = $this->Servis_model->getLastId();
    if($getid == 0 || $getid == 'null'){
      return 1;
    }else{
      return $getid + 1;
    }
  }

  function deleteServis($no_nota){
    $no_nota = $this->uri->segment(3);
    $this->Servis_model->deleteServis($no_nota);
    $this->Servis_model->deleteDetail($no_nota);
    $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah dihapus'));
    redirect(base_url('servis'));

  }

  function editServis($no_nota){

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nohp', 'required|max_length[12]|');
    $this->form_validation->set_rules('kategori', 'required');
    $this->form_validation->set_rules('kerusakan', 'required');
    $this->form_validation->set_rules('kelengkapan', 'required');
    $this->form_validation->set_rules('status', 'required');
    $this->form_validation->set_rules('harga', 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['kategori']   = $this->Servis_model->getKategori();
      $data['status']     = $this->Servis_model->getKategori();
      $id = $this->uri->segment(3);
      $data['record'] = $this->Servis_model->getOne($id);
      $this->template->load('template/master','editServis',$data);
    }else{
      $no_nota = $this->input->post('no_nota');
      $dataServis = array (

        'nama_pelanggan' => $this->input->post('nama'),
        'id_kategori' => $this->input->post('kategori'),
        'tipe' => $this->input->post('tipe'),
        'kelengkapan' => $this->input->post('kelengkapan'),
        'kontak' => $this->input->post('nohp'),
        'status' => $this->input->post('status'),


      );

      $dataDetail = array(
        'kerusakan' => $this->input->post('kerusakan'),
        'harga' => $this->input->post('harga')
      );

      $this->Servis_model->updateServis($dataServis,$no_nota);
      $this->Servis_model->updateDetailServis($dataDetail,$no_nota);

      $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Data telah diedit'));

      redirect(base_url('servis'));
    }




  }


  function detail(){
    $id = $this->uri->segment(3);
    $data['kategori']   = $this->Servis_model->getKategori();
    $data['rc'] = $this->Servis_model->detail($id)->row();
    $this->template->load('template/master','detail',$data);
  }

  function batal(){

    $data['record'] = $this->Servis_model->getBatal();
    $this->template->load('template/master','servisdash',$data);

  }

  function print($id){
    $data['rc'] = $this->Servis_model->detail($id)->row();
    $this->load->view('print',$data);
  }
}



