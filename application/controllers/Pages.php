<?php

class Pages extends CI_Controller {

	 public function __construct(){
        parent::__construct();
        // $this->load->model('contact_model', 'contact');
        $this->load->database();
        $this->load->model('page_model');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
      }

	public function home()
	{
		$data['days_left'] = $this->page_model->daysLeft();	
		$this->load->view('pages/dashboard', $data);
		
	}
}
