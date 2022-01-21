<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_pelanggan extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('M_template_pelanggan');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_pelanggan_core');

	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		$user = $this->M_template_pelanggan->oke($id); 
		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect(base_url("login"));
		}

		

		$data['nama'] = $this->M_template_pelanggan->oke($id);
		$data['hp'] = $this->M_template_pelanggan->oke($id);

		$this->load->view('view_template_pelanggan_core',$data);

		
	}

}
