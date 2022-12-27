<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');

	}

	public function home()
	{
        
        $data['list'] = array('Civic','Audi','City','Parado');
        // echo count($data);

		$this->load->view('home',$data);
	}
	
	public function contact()
	{
		
		$this->load->view('home');
	}

}