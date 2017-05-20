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
    $query = $this->db->query('SELECT * FROM servis ORDER BY no_servis DESC LIMIT 1')->row();
    return $query->no_servis;

  }

  function getKategori(){
    return $this->db->get('kategori')->result();

  }

  function deleteServis($no_nota){
    return $this->db->delete('servis' , array('no_nota' => $no_nota));
    

  }

  function deleteDetail($no_nota){

    return  $this->db->delete('detail' , array('no_nota' => $no_nota));
  }

  function getOne($no_nota){
    $sql = "SELECT servis.no_nota,servis.nama_pelanggan,servis.kontak,servis.id_kategori,servis.tipe,servis.kelengkapan,servis.status,detail.kerusakan,detail.harga from servis INNER JOIN detail ON servis.no_nota = detail.no_nota where servis.no_nota = '$no_nota' ";
    return $this->db->query($sql)->row();
//        return $this->db->get_where('servis' , array('no_nota' => $no_nota))->row();
  }

  function updateStatusOk($id){
    $this->db->set('status', '2');
    $this->db->where('no_nota',$id);
    $this->db->update('servis');
  }

  function updateStatusGagal($id){
    $this->db->set('status', '4');
    $this->db->where('no_nota',$id);
    $this->db->update('servis');
  }

  function updateServis($data,$no_nota){

   $this->db->where('no_nota' , $no_nota);
   $this->db->update('servis',$data);

 }

 function updateDetailServis($data,$no_nota){
  $this->db->where('no_nota',$no_nota);
  $this->db->update('detail',$data);

}

function detail($no_nota){
  $sql = "select servis.* , detail.* from servis INNER JOIN detail on servis.no_nota = detail.no_nota where servis.no_nota = '$no_nota'";
  return $this->db->query($sql);

}

function getBatal(){

  $this->db->where('status', "4");
  return $this->db->get('servis')->result();

}



}
