<?php

class Pages extends CI_Controller {

	public function home()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
}
