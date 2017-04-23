<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
        $this->load->library('form_validation');
    }
    
    function index(){
        redirect(base_url('master/dashboard'));
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('master/login'));
    }
    
    function cekLogin($enabled=true){
        if($enabled){
         if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
           $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','value'=>'Anda Harus Login Terlebih Dahulu'));
           $this->session->set_userdata('login_status',0);
           redirect(base_url('master/login'));
         } 
        }
    }
    
    function login(){
        if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
            $this->template->load('template/tlogin.php','login');
        } else {
            redirect(base_url('master/dashboard'));
        }
            
        }
        
    function auth(){
        
        $this->cekLogin(false); //kenapa false ? 
        $username =$this->input->post('username');
        $password =$this->input->post('password');
        $hasil = $this->Master_model->auth($username,$password);
        
        if($hasil == 1){
            $data = array(
            'login_status'=>'1',
            'username'=>$username,
            );
            $this->session->set_userdata($data);
            redirect(base_url('master/dashboard'));
        }else{
             $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','message'=>'Username/Password yang Anda masukkan salah!'));
            redirect(base_url('master/login'));

        }
    }
    
    function dashboard(){
        $this->cekLogin();
        $this->template->load('template/master' , 'utama');
    }
        
}


