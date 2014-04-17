<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user extends CI_Model
{
	
	function index() {

		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('status','new');
		$query = $this->db->get();

		if( !empty($query)) {
			return $query->result();
		} else {
			return NULL;
		}

	}

	function insert_details( $uid ) {

		$data = array(
		   'user_ip' =>  NOW() ,
		   'submission_id' => NOW() ,
		   'qualified' => '0' ,
		   'status' => 'registered',
		   'consent' => '0',
		   'userid' => $uid

		);

		$this->db->insert('registration', $data); 


	}

}
