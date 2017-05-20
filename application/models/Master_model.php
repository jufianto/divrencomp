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

  function getUser($username){
  	return $this->db->get_where('user',array('username' => $username))->row();
  }

  function updatePass($id,$password){

  	$this->db->set('password', $password);
    $this->db->where('username',$id);
    $this->db->update('user');

  }
  
  
}