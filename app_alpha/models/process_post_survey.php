<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class process_post_survey extends CI_Model
{
	
	function process_survey($post, $uid) {


		foreach ( $post as $question => $response ) {

			if($question != "section") {

					$data_response = array(
						'uid' => $uid,
					    'question' => $question,
					    'response' => $response,
					);

				
				$this->db->insert('follow_up_results', $data_response); 

				unset($data_response);

			}

		}
	}

}