<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('email_helper'))
{

    function send_email( $email_title, $email_type, $email_body, $email_to )
    {

    	mail( $email_to, $email_title, $email_body );

    }

}