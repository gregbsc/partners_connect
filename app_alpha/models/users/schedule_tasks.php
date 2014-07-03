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

	function schedule_reminder($uid, $action, $run_time, $title, $message, $path) {

		$data = array( 'uid' => $uid,
					   'action' => $action,
					   'run_time' => $run_time,
					   'title' => $title,
					   'completed' => 0,
					   'message' => $message,
					   'path' => $path );

		$this->db->insert('scheduled_tasks', $data);

	}

	function upcoming() {

		$test = array('test'=>'tester');

	}


}