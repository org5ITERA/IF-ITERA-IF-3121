<?php

class User_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}
