<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Servis_model extends CI_Model
{
    function get_all_data(){
        return $this->db->get('servis')->result();
    }
    
    function insertServis($data){
        $this->db->insert('servis' , $data);
        
    }
    
    function insertDetailServis($data){
        $this->db->insert('detail',$data);
    }
    
    function getLastId(){
      $query = $this->db->query('SELECT * FROM servis ORDER BY id_servis DESC LIMIT 1')->row();
      return $query->id_servis;
      
    }
    
    function getKategori(){
        return $this->db->get('kategori')->result();
    }
}