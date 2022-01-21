<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_dashboard');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_dashboard",
            'namafileview' 	=> "V_data_dashboard",
            'tampil'    => $this->m_data_dashboard->tampil(),
             'hs'    => $this->m_data_dashboard->hs(),
             'hb'    => $this->m_data_dashboard->hb(),
		);
		echo Modules::run('template/tampilCore', $data);
    }

    function tambahguru(){
        $this->m_data_dashboard->simpanguru();
        redirect('data_dashboard');
    }
}
?>