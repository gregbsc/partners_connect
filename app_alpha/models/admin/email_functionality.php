<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class email_functionality extends CI_Model
{
	
	function history( $uid ) {

		$this->db->select('*');
		$this->db->where('user_id', $uid );
		$this->db->order_by('row_id', 'desc');
		$query = $this->db->get('email_history');
		$query = $query->result();

		return $query;

	}

	function user_email( $uid ) {

		$this->db->select('id, username, email');
		$this->db->where('id', $uid );
		$query = $this->db->get('users');
		$query = $query->result();

		return $query;

	}

	function record_email( $email_title, $email_type, $email_body, $user_email, $uid ) {

		$data = array(
		   'user_id' => $uid ,
		   'type' => $email_type ,
		   'to_location' => $user_email ,
		   'message' => $email_body ,
		   'subject' => $email_title
		);

		$this->db->insert('email_history', $data); 

	}


}
