<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personality extends CI_Model
{
	
	function exists( $uid ) {

		$this->db->select('uid');
		$this->db->from('personality');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$cleanResult = $query->result();

	}

	function core( $uid ) {

		$this->db->select('*');
		$this->db->from('personality');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$cleanResult = $query->result();

		if(is_array($cleanResult) && ( count($cleanResult) > 0 ) ) {
			return $cleanResult[0];
		}

		return NULL;

	}

	function build_personality( ) {

		// find relevant questions and build personality profile

	}

	function update_personality( $uid, $data ) {

		// update a piece of users personality 		
		$this->db->where('uid', $uid);
		$this->db->update('personality', $data);

	}

	function update_char($uid, $char) {

		$data = array('character' => $char );
            	
		$this->db->where('uid', $uid);

		$result = $this->db->update('personality', $data); 

		return $result;

	}

	function process_form($uid, $question, $answer, $table, $page, $session, $important) {

		$check = array('session','page','table','location','action');

		if( !in_array($question, $check) ) {

			$data = array('uid' => $uid, 
						'session' => $session,
						'page' => $page, 
						'goal' => $question,
						'answer' => $answer); 
				

 			$this->db->insert($table, $data);

		}

		if( isset($page) && isset($session) ) {

			$datacomplete = array('completed' => 1);
			$this->db->where('uid', $uid);
			$this->db->where('page', $page);
			$this->db->where('session', $session);
			$this->db->update('user_progress', $datacomplete);

		}


	}


	function update_personality_goal( $uid, $session, $goal, $important ) {

		
		if( isset($session) ) {

			$datacomplete = array('important' => intval($important) );

			$this->db->where('uid', intval($uid) );
			$this->db->where('goal', $goal);
			$this->db->where('session', $session);
			$this->db->update('user_goals', $datacomplete);

		} else {
			return "error";
		}


	}

	function update_progress($uid, $session, $page) {

		$data = array('completed' => '1' );

		$this->db->where('uid', $uid);
		$this->db->where('page', $page);
		$this->db->where('session', $session);

		$this->db->update('user_progress', $data); 


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