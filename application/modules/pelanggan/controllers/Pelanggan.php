<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pelanggan');
		 $this->load->model('login/m_session');
		 
	}

	
	// index
	function index()
	{
		$id=  $this->session->userdata('session_id');
		$data = array(
			'namamodule' 	=> "pelanggan",
			'namafileview' 	=> "V_pelanggan",
			'tampil'		=> $this->m_pelanggan->tampil(),
			'perkg'		=> $this->m_pelanggan->perkg(),
			'nama'		=> $this->m_pelanggan->nama($id),

		);
		echo Modules::run('Template_pelanggan/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_pelanggan->tambah();
		redirect('pelanggan');



	}

	function edit()
	{
		$this->m_pelanggan->edit();
		redirect('pelanggan');
	}
	function status()
	{
		$this->m_pelanggan->status();
		redirect('pelanggan');
		
	}

	function hapus($id)
	{
		$this->m_pelanggan->hapus($id);
		redirect('pelanggan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pelanggan",
			'namafileview' 	=> "V_pelanggan",
			'tampil'		=> $this->m_pelanggan->cari(),
		);
		echo Modules::run('Template_pelanggan/tampilCore', $data);
	}
	
}
 