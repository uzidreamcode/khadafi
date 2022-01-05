<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_Data_user');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_user",
			'namafileview' 	=> "V_data_user",
			'tampil'		=> $this->m_Data_user->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_Data_user->tambah();
		redirect('data_user');
	}

	function edit()
	{
		$this->m_Data_user->edit();
		redirect('data_user');
	}

	function hapus($id)
	{
		$this->m_Data_user->hapus($id);
		redirect('data_user');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_user",
			'namafileview' 	=> "V_data_user",
			'tampil'		=> $this->m_Data_user->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 