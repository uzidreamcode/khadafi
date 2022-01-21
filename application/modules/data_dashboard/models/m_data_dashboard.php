<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_dashboard extends CI_Model {

	function tampil()
	{
		return $this->db->get('cucian')->result();
	}
	function hs()
	{
		$this->db->select('*')
		->from('cucian')
		->where('status','selesai');
		$query = $this->db->get();
		return $query->num_rows();
	}
	function hb()
	{
		$this->db->select('*')
		->from('cucian')
		->where('status','belum');
		$query = $this->db->get();
		return $query->num_rows();
	}
	function simpanguru(){
  //       $namaguru   =   $this->input->post('nama_guru');
  //       $alamatguru =   $this->input->post('alamat_guru');

  //       $data = array(
		// 	'nama_guru'		=> $namaguru,
		// 	'alamat_guru'	=> $alamatguru,
		// );
		// $this->db->insert('data_dashboard', $data);

	}

}
?>