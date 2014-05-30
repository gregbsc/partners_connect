<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_tracking extends CI_Model
{
	
	function status( $uid, $session, $page ) {

		$this->db->select('*');
		$this->db->from('user_progress');
		$this->db->where('uid', $uid);
		$this->db->where('session', $session);
		$this->db->where('page', $page);
		$query = $this->db->get();
		$cleanResult = $query->num_rows();

		if($cleanResult < 1) {

			$data = array(
			   'uid' =>  $uid,
			   'session' =>  $session,
			   'page' => $page,
			   'completed' => 0
			);

			$this->db->insert('user_progress', $data); 

			return 0;
		}
		
		$result_status = $query->result();

		return $result_status[0]->completed; 

	}

	function update( $uid, $session, $page ) {



	}

	function recent( $uid, $session ) {

		$this->db->select('*');
		$this->db->from('user_progress');
		$this->db->where('uid', $uid);
		$this->db->where('session', $session);
		$this->db->where('completed', 1);
		$this->db->order_by('page','DESC');
		$query = $this->db->get();
		$result_status = $query->result();

		if(!empty($result_status)) {
			return $result_status[0]->page;
		} else {
			return 1;
		}

	}


}