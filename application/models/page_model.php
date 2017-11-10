<?php

class Page_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function daysLeft(){
        	$year = date('Y');
			$date1 = new DateTime($year."-12-31"); 
			$now = new DateTime();
			$diff = $date1->diff($now);
			return 'Remaining Days ::'. $diff->days ;
        }

}