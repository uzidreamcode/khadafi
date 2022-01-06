<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_pemesanan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_pemesanan",
			'namafileview' 	=> "V_data_pemesanan",
			'tampil'		=> $this->m_data_pemesanan->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_pemesanan->tambah();
		redirect('data_pemesanan');
	}

	function edit()
	{
		$this->m_data_pemesanan->edit();
		redirect('data_pemesanan');
	}

	function hapus($id)
	{
		$this->m_data_pemesanan->hapus($id);
		redirect('data_pemesanan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_pemesanan",
			'namafileview' 	=> "V_data_pemesanan",
			'tampil'		=> $this->m_data_pemesanan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 