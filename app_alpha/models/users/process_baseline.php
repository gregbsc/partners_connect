<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class process_baseline extends CI_Model
{


	function process( $baseline_section, $uid ) {

		$section_id = $baseline_section['section'];

		foreach ( $baseline_section as $question => $response ) {

			if($question != "section") {

				$data_response = array(
					'uid' => $uid,
				    'question' => $question,
				    'response' => $response,
				    'date' => time(),
				    'section' => $section_id
				);

				$this->db->insert('baseline_results', $data_response); 

				unset($data_response);

			}

		}

	} // end of process(); 



}
