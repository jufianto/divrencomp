<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sparepart_model extends CI_Model
{
    function getAllData(){
        return $this->db->get('sparepart')->result();
    }
}