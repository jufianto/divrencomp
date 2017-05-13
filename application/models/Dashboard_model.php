<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

  function countServis(){
    $data = $this->db->count_all('servis');
    return $data;
  }

  function countSpare(){
    return $this->db->count_all('sparepart');
  }



}
