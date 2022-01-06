<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pemesanan extends CI_Model {

	function tampil()
	{
		return $this->db->get('cucian')->result();
	}
	function perkg()
	{
		return $this->db->get('harga')->result();
		

	}

	function tambah()
	{
		$nama 		= $this->input->post('nama');
		$hp	= $this->input->post('hp');
		$berat	= $this->input->post('berat');
		$harga	= $this->input->post('harga_kg');
		$total = $berat * $harga;
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');


		

		$data = array(
			'nama_pelanggan'		=> $nama,
			'berat'		=> $berat,
			'tanggal' 	=> $tanggal,
			'harga'						=>$total,
			'no_hp'						=>$hp,
			'status'						=>$status,




		);
		$this->db->insert('cucian', $data);
		

	}
	function status()
	{
		$id 		= $this->input->post('id_status');
		$status	= $this->input->post('status');
		
		

		$data = array(
			'status'						=>$status,




		);
		$this->db->where('id_cucian',$id)->update('cucian', $data);
		

	}

	function edit()
	{
		$id_user = $this->input->post('id_admin');
		$nama 		= $this->input->post('nama');
		$hp	= $this->input->post('hp');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$password1 	= sha1($password);
		$level	= $this->input->post('level');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
			if ($this->upload->do_upload('gambar'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'nama'		=> $nama,
					'username'		=> $username,
					'password'		=> $password1,
					'hp'		=> $hp,
					'level'		=> $level,
					'foto' 		=> $gbr['file_name'],
				);
				$this->db->where('id_admin',$id_user)->update('tb_login', $data);

			}	 
		}
		else{
			$data = array(
				'nama'		=> $nama,
				'username'		=> $username,
				'password'		=> $password1,
				'hp'		=> $hp,
				'level'		=> $level,
			);
			$this->db->where('id_admin',$id_user)->update('tb_login', $data);
		}
	}

	function hapus($id)
	{
		$this->db->where('id_cucian', $id)->delete('cucian');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama',$cari)->get('tb_login')->result();
	}
}