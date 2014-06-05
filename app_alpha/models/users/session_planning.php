<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_planning extends CI_Model
{
	
	function scheduled_session( $uid ) {

		$this->db->select('*');
		$this->db->from('scheduled_sessions');
		$this->db->where('uid', $uid);
		$this->db->where('completed', 0);
		$this->db->order_by('session_number', 'ASC');
		$query = $this->db->get();
		$cleanResult = $query->result();

		if(is_array($cleanResult) && ( count($cleanResult) > 0 ) ) {
			return $cleanResult[0];
		}

		return NULL; 

	}

	function all_sessions( $uid ) {

		$this->db->select('*');
		$this->db->from('scheduled_sessions');
		$this->db->where('uid', $uid);
		$this->db->where('session_number >', 0);
		$this->db->order_by('session_number', 'DESC');
		$query = $this->db->get();
		$cleanResult = $query->result();

		return $cleanResult;	
	}

	function most_recent_session_completed( $uid ) {

		$sql = "SELECT * FROM scheduled_sessions WHERE uid = '$uid' AND completed = 1 ORDER BY session_number DESC";

		$sqlResult = $this->db->query( $sql );

		$cleanResult = $sqlResult->result();

		if( is_array($cleanResult) && count($cleanResult) > 0 ) {
			return $cleanResult[0];
		}

		return NULL;

	}

	function current_session( $uid ) {

		$sql = "SELECT * FROM scheduled_sessions WHERE uid = '$uid' ORDER BY session_number DESC";

		$sqlResult = $this->db->query( $sql );

		$cleanResult = $sqlResult->result();

		if( is_array($cleanResult) && count($cleanResult) > 0 ) {
			return $cleanResult[0];
		}

		return NULL;

	}


	function schedule_session( $uid, $session, $session_time, $completed ) {

		//check to find out if entry already exists. 
		$pre_check = $this->db->query("SELECT count(*) as count FROM scheduled_sessions WHERE uid = '$uid' AND session_number = '$session' ");
		$check = $pre_check->result();

		if(isset($check[0]->count) && $check[0]->count < 1) {
			
			$revised_date = date('y-m-d h-m-s', $session_time);

			$data = array( 'uid' => $uid,
						   'session_number' => $session,
						   'date' => $revised_date,
						   'completed' => $completed );

			$this->db->insert('scheduled_sessions', $data);
		}

	}

	function live_session( $uid ) {

		$sql = "SELECT * FROM scheduled_sessions WHERE uid = '$uid' AND completed = 0 ORDER BY session_number DESC";

		$sqlResult = $this->db->query( $sql );

		$cleanResult = $sqlResult->result();

		if( is_array($cleanResult) && count($cleanResult) > 0 ) {
			return $cleanResult[0];
		}

		return 0;

	}

	function session_status($uid, $session) {

		$sql = "SELECT * FROM scheduled_sessions WHERE uid = '$uid' AND session_number = '$session' ORDER BY session_number DESC";

		$sqlResult = $this->db->query( $sql );

		$cleanResult = $sqlResult->result();

		if( is_array($cleanResult) && count($cleanResult) > 0 ) {
			return $cleanResult[0]->completed;
		}

		return NULL;

	}

	function complete_session($uid, $session) {

		$data = array('completed' => 1);	               
		$this->db->where('session_number', $session);
		$this->db->where('uid', $uid);
		$this->db->update('scheduled_sessions', $data); 

	}

}