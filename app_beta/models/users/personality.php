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
		$this->db->where('id', $uid);
		$this->db->update('personality', $data); 

	}

	function update_char($uid, $char) {

		$data = array(
               'character' => $char
            );

		$this->db->where('uid', $uid);

		$this->db->update('personality', $data); 

	}

	function process_form($uid, $postObject, $table) {

		$check = array('session','page','table','location','action');

		foreach($postObject as $question => $answer) {

			if( !in_array($question, $check) ) {
				$data = array($question => $answer);     
				$this->db->where('uid', $uid);
				$this->db->insert($table, $data);
				unset($data);
			}

		}

		if( isset($postObject['page']) && isset($postObject['session']) ) {

			$data = array('completed' => 1);

			$this->db->where('uid', $uid);
			$this->db->where('page', $postObject['page']);
			$this->db->where('session', $postObject['session']);

			$this->db->update('user_progress', $data);

		}

	}

	function update_progress($uid, $session, $page) {

		$data = array('completed' => '1' );

		$this->db->where('uid', $uid);
		$this->db->where('page', $page);
		$this->db->where('session', $session);

		$this->db->update('user_progress', $data); 


	}



}