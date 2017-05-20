<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

	function countBatal(){
		$this->db->where('status', '4');
		$this->db->from('servis');
		return $this->db->count_all_results();
	}

	function pemasukan(){

		return $this->db->query("SELECT SUM(harga) as harga FROM detail")->row();


	}

	function pengeluaran(){
		return $this->db->query("SELECT SUM(harga_sparepart) as harga FROM sparepart")->row();

	}


}
