<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_content extends CI_Model
{
	
	function body( $session_number, $page_number ) {

		$this->db->select('*');
		$this->db->from('session_content');
		$this->db->where('session_number', $session_number);
		$this->db->where('page_number', $page_number);
		// $this->db->order_by('session_number', 'ASC');
		$query = $this->db->get();
		$cleanResult = $query->result();

		if(is_array($cleanResult) && ( count($cleanResult) > 0 ) ) {
			return $cleanResult[0];
		}

		return NULL;

	}

	function videos($session_number, $page_number) {

		$this->db->select('*');
		$this->db->from('video_ids');
		$this->db->where('session_number', $session_number);
		$this->db->where('page_number', $page_number);
	
		$query = $this->db->get();
		$cleanResult = $query->result();

		return $cleanResult;

	}

	function videoById( $videoId ) {

		$this->db->select('*');
		$this->db->from('video_ids');
		$this->db->where('video_id', $videoId);
	
		$query = $this->db->get();
		$cleanResult = $query->result();

		return $cleanResult;

	}

	function status($uid, $session, $page, $required) {

		$this->db->select('uid, session, page, completed');
		$this->db->from('user_progress');
		$this->db->where('uid', $uid);
		$this->db->where('page', $page);
		$this->db->where('session', $session);

		$query = $this->db->get();
		$cleanResult = $query->result();
		
		if(isset($cleanResult[0])) {

			$status = $cleanResult[0]->completed;
			return $status;

		} else {

			return 0;

		}
	
	}


}