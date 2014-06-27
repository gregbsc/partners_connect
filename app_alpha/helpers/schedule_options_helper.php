<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('schedule_options'))
{

    function next_available( $last_session )
    {

    	$data['five_days_later'] = strtotime('+5 days', $last_session);
    	$data['six_days_later'] = strtotime('+6 days', $last_session);
    	$data['seven_days_later'] = strtotime('+7 days', $last_session);

    	return $data;
  
    }

    function time_past( $last_session )
    {

    	$data['five_days_later'] = strtotime('now', $last_session);
    	$data['six_days_later'] = strtotime('+1 day', $last_session);
    	$data['seven_days_later'] = strtotime('+2 days', $last_session);

    	return $data;
  
    }

}