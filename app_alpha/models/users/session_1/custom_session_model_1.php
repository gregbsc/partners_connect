<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class custom_session_model_1 extends CI_Model
{
	//testing purposes 
	function test( $uid ) {
		return "test";
	}

	function session_1_goals( $uid ) {

		$this->db->select('uid,goal,answer,session,page');
		$this->db->from('user_goals');
		$this->db->where('uid', $uid);
		$this->db->where('session', 1);
		$this->db->where('page', 4);
		$this->db->order_by('answer', 'DESC');
		$query = $this->db->get();
		$cleanResult = $query->result();

		return $cleanResult; 
		
	}


}