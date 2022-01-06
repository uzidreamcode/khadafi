<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_selesai extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_selesai');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_selesai",
			'namafileview' 	=> "V_data_selesai",
			'tampil'		=> $this->m_data_selesai->tampil(),
			'perkg'		=> $this->m_data_selesai->perkg(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_selesai->tambah();
		redirect('data_selesai');



	}

	function edit()
	{
		$this->m_data_selesai->edit();
		redirect('data_selesai');
	}
	function status()
	{
		$this->m_data_selesai->status();
		redirect('data_selesai');
		
	}

	function hapus($id)
	{
		$this->m_data_selesai->hapus($id);
		redirect('data_selesai');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_selesai",
			'namafileview' 	=> "V_data_selesai",
			'tampil'		=> $this->m_data_selesai->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 