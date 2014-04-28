<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('admin_email_contact'))
{

    function success_register_contact( $email_to )
    {

    	$email_title = "Successful Registration";
    	$email_body = "A user just successfully registered.";

    	mail( $email_to, $email_title, $email_body );

    }

}