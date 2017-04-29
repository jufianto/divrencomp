<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Servis_model extends CI_Model
{
    function get_all_data(){
        return $this->db->get('servis')->result();
    }
    
    function insertServis($nama,$nohp,$kategori,$tipe,$kelengkapan){
        $idd = date('ymdz');
        
    }
}