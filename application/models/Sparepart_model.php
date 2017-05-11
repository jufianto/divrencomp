<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sparepart_model extends CI_Model
{
    function getAllData(){
        return $this->db->get('sparepart')->result();
    }

    function tambah($data){
      $this->db->insert('sparepart' , $data);
    }

    function delete($id)
    {
        return $this->db->delete('sparepart' , array('id_sparepart' => $id));
    }

    function getOne($id){
      return $this->db->get_where('sparepart' , array('id_sparepart' => $id))->row();
    }

    function edit($data,$id){
      $this->db->where('id_sparepart' , $id);
      $this->db->update('sparepart',$data);
    }
}
