<?php

class Sales extends CI_Controller {

	public $id;
    public $borough_id;
    public $price;
    public $profit;
    public $address;
    public $client_name;
    public $client_phone;
    public $client_email;


 public function __construct(){
        parent::__construct();
        // $this->load->model('contact_model', 'contact');
        $this->load->database();
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
      }

public function calc()
	{
		$data['sales'] = $this->sale_model->get_last_ten_entries();	
		$this->load->view('sales/goalCalculator', $data);
	}

}
