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


