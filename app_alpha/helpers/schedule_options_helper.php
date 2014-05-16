<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('schedule_options'))
{


    function next_available( $last_session )
    {
    	print_r($last_session);
    	$data['five_days_later'] = strtotime('+5 days', strtotime($last_session->date));
    	$data['six_days_later'] = strtotime('+6 days', strtotime($last_session->date));
    	$data['seven_days_later'] = strtotime('+7 days', strtotime($last_session->date));

    	return $data;
  
    }


}