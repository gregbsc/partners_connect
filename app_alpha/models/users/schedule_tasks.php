<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class schedule_tasks extends CI_Model
{
	
	function scheduled_sessions( $uid ) {

		$this->db->select('*');
		$this->db->from('scheduled_sessions');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$cleanResult = $query->result();

		return $cleanResult; 

	}

	function schedule_a_session( $uid, $date, $session ) {




	}

	function reschedule_a_session( $uid, $date, $session ) {




	}



}
