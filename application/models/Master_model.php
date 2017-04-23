<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model
{
  
  function auth($username,$password){
   $check = $this->db->get_where('user',array('username' => $username, 'password' => md5($password)));
   if($check->num_rows() == 1){
       return 1;
   }else{
       return 0;
   }
  }
  
  
}