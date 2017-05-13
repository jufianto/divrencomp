<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

  function countBatal(){
    $this->db->where('status', '4');
    $this->db->from('servis');
    return $this->db->count_all_results();
  }


}
