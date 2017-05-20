<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');

    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    function profil(){
     $data['record'] = $this->Master_model->getUser($_SESSION['username']);
     $this->template->load('template/master','profil',$data);
 }

 function editPass($id){
     $this->form_validation->set_rules('username', 'username', 'required');
     $this->form_validation->set_rules('password', 'required');
     $data['record'] = $this->Master_model->getUser($_SESSION['username']);
     $password = $data['record']->password;
     $username = $data['record']->username;

     if ($this->form_validation->run() === FALSE) {

      $this->template->load('template/master','editPass',$data);
  }else{

    $newpass1 = $this->input->post('newpass1');
    $oldpassword =  $this->input->post('oldpass');
    $newpass2 =  $this->input->post('newpass2');
    if(md5($oldpassword) == $password){
        if($newpass1 == $newpass2){

         $this->Master_model->updatePass($username,md5($newpass1));
         

         $this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Password Telah Diubah'));
         redirect(base_url('auth/profil'));
     }else{

         $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','message'=>'Password Baru Tidak Sesuai'));
         redirect(base_url('auth/profil'));

     }
 }else{
    $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','message'=>'Password Lama Tidak Sesuai'));
    redirect(base_url('auth/profil'));
}

}
}


function login(){
    if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
        $this->template->load('template/tlogin.php','login');
    } else {
        redirect(base_url('dashboard'));
    }

}

function index(){
 redirect('auth/login');
}   

function auth(){

//        $this->cekLogin(false); //kenapa false ? 
    $username =$this->input->post('username');
    $password =$this->input->post('password');
    $hasil = $this->Master_model->auth($username,$password);

    if($hasil == 1){
        $data = array(
            'login_status'=>'1',
            'username'=>$username,
            );
        $this->session->set_userdata($data);
        redirect(base_url('dashboard'));
    }else{
     $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','message'=>'Username/Password yang Anda masukkan salah!'));
     redirect(base_url('auth/login'));

 }
}


}


