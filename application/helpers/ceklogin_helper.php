<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('ceklogin'))
{
      function cekLogin($enabled=true){
          $ci = get_instance();
        if($enabled){
         if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
           $ci->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','value'=>'Anda Harus Login Terlebih Dahulu'));
           $ci->session->set_userdata('login_status',0);
           redirect(base_url('auth/login'));
         } 
        }
    }
    
  
}