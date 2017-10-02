<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controlls extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_data');
	}

	function user(){
		$data['user'] = $this->User_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

}
