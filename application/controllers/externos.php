<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Externos extends CI_Controller {

	public function index()
	{
		
		// if(!@$this->user) redirect ('welcome/login');
		$this->load->view('externo/inicio_externo');
	}
}